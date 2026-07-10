const fs = require('fs');
const path = require('path');

const rootDir = __dirname;
const previewDir = path.join(rootDir, 'preview');

if (!fs.existsSync(previewDir)) {
    fs.mkdirSync(previewDir);
}

// Read core header and footer
let header = fs.readFileSync(path.join(rootDir, 'header.php'), 'utf8');
let footer = fs.readFileSync(path.join(rootDir, 'footer.php'), 'utf8');

// Helper to clean PHP from header/footer and map pretty URLs to static HTML files
function cleanPHP(content) {
    return content
        .replace(/<\?php language_attributes\(\);\s*\?>/g, 'lang="en-US"')
        .replace(/<\?php bloginfo\(\s*'charset'\s*\);\s*\?>/g, 'UTF-8')
        .replace(/<\?php wp_head\(\);\s*\?>/g, '')
        .replace(/<\?php wp_footer\(\);\s*\?>/g, '')
        .replace(/<\?php wp_body_open\(\);\s*\?>/g, '')
        .replace(/<\?php body_class\(\);\s*\?>/g, 'class="bg-brand-bg text-brand-dark font-sans antialiased min-h-screen flex flex-col"')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/'\s*\)\s*\);\s*\?>/g, 'index.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/about\/'\s*\)\s*\);\s*\?>/g, 'about.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/contact\/'\s*\)\s*\);\s*\?>/g, 'contact.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/doctors\/'\s*\)\s*\);\s*\?>/g, 'doctors.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/locations\/'\s*\)\s*\);\s*\?>/g, 'locations.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/speciality\/'\s*\)\s*\);\s*\?>/g, 'speciality.html')
        .replace(/<\?php\s+echo\s+date\(\s*['"]Y['"]\s*\);\s*\?>/g, new Date().getFullYear())
        .replace(/<\?php[\s\S]*?\?>/g, ''); // strip remaining PHP blocks
}

header = cleanPHP(header);
footer = cleanPHP(footer);

// Resolve page templates
function compilePage(pageFile, outputName) {
    let pageContent = fs.readFileSync(path.join(rootDir, pageFile), 'utf8');
    
    // Replace template part gets recursively
    const templatePartRegex = /get_template_part\(\s*['"](.*?)['"]\s*\);/g;
    let match;
    while ((match = templatePartRegex.exec(pageContent)) !== null) {
        const partPath = path.join(rootDir, match[1] + '.php');
        if (fs.existsSync(partPath)) {
            let partContent = fs.readFileSync(partPath, 'utf8');
            pageContent = pageContent.replace(match[0], partContent);
        } else {
            pageContent = pageContent.replace(match[0], `<!-- Part ${match[1]} not found -->`);
        }
    }

    // Clean up CPT dynamic loop blocks in experts-section and doctors-grid
    // and keep only the fallback mockup block content.
    pageContent = pageContent.replace(/<\?php\s*if\s*\(\s*\$doctors_query->have_posts\(\)\s*\)[\s\S]*?else\s*:\s*\?>([\s\S]*?)<\?php\s*endif;\s*\?>/g, '$1');

    // Clean remaining PHP tags
    pageContent = pageContent
        .replace(/<\?php get_header\(\);\s*\?>/g, '')
        .replace(/<\?php get_footer\(\);\s*\?>/g, '')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/'\s*\)\s*\);\s*\?>/g, 'index.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/about\/'\s*\)\s*\);\s*\?>/g, 'about.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/contact\/'\s*\)\s*\);\s*\?>/g, 'contact.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/doctors\/'\s*\)\s*\);\s*\?>/g, 'doctors.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/locations\/'\s*\)\s*\);\s*\?>/g, 'locations.html')
        .replace(/<\?php echo esc_url\(\s*home_url\(\s*'\/speciality\/'\s*\)\s*\);\s*\?>/g, 'speciality.html')
        .replace(/<\?php the_permalink\(\);\s*\?>/g, 'single-doctor.html')
        .replace(/<\?php the_title\(\);\s*\?>/g, 'Dr. V.S.V. Prasad')
        // Speciality Hero replacements for static mockup compilation
        .replace(/<\?php echo esc_html\(\s*\$speciality_hero_badge\s*\);\s*\?>/g, 'PREMIUM HEALTHCARE')
        .replace(/<\?php echo esc_html\(\s*\$hero_title\s*\);\s*\?>/g, 'Best Gynecology Hospital in Hyderabad. Lotus Little Stars Hospital')
        .replace(/<\?php echo wp_kses_post\(\s*\$speciality_hero_description\s*\);\s*\?>/g, 'Comprehensive Gynecology Care for Every Stage of a Woman\'s Life. At Lotus Little Stars Hospital, we provide expert gynecological care tailored to the unique healthcare needs of women at every stage of life.')
        .replace(/<\?php echo esc_url\(\s*\$hero_primary_button\['url'\]\s*\);\s*\?>/g, '#')
        .replace(/<\?php echo esc_html\(\s*\$primary_title\s*\);\s*\?>/g, 'Book Appointment')
        .replace(/<\?php echo esc_url\(\s*\$hero_secondary_button\['url'\]\s*\);\s*\?>/g, '#')
        .replace(/<\?php echo esc_html\(\s*\$secondary_title\s*\);\s*\?>/g, 'Explore Services')
        .replace(/<\?php if \(\s*has_post_thumbnail\([\s\S]*?<\?php else\s*:\s*\?>/g, '')
        .replace(/<\?php echo esc_url\(\s*get_stylesheet_directory_uri\(\)\s*\.\s*['"]\/assets\/gynaecology_hero_image\.png['"]\s*\);\s*\?>/g, 'assets/gynaecology_hero_image.png')
        // Speciality Overview replacements for static mockup compilation
        .replace(/<\?php echo esc_html\(\s*\$overview_heading\s*\);\s*\?>/g, 'Women\'s Health, Delivered with Expertise and Compassion')
        .replace(/<\?php echo wp_kses_post\(\s*\$overview_description\s*\);\s*\?>/g, 'Our life-stage care approach ensures that from adolescence through menopause and beyond, every woman receives the specialized attention she deserves. Our multidisciplinary team combines clinical excellence with a compassionate touch, making healthcare a seamless part of your wellness journey.')
        .replace(/<\?php[\s\S]*?\?>/g, ''); // strip all other PHP blocks

    // Assemble page
    const fullHTML = `<!DOCTYPE html>\n<html lang="en-US">\n${pageContent}\n</html>`;
    
    // Header is already compiled inside the pageContent replace
    fs.writeFileSync(path.join(previewDir, outputName), fullHTML);
    console.log(`Compiled: ${outputName}`);
}

compilePage('front-page.php', 'index.html');
compilePage('page-about.php', 'about.html');
compilePage('page-contact.php', 'contact.html');
compilePage('archive-doctor.php', 'doctors.html');
compilePage('page-locations.php', 'locations.html');
compilePage('archive-speciality.php', 'speciality.html');
compilePage('single-doctor.php', 'single-doctor.html');
compilePage('single-speciality.php', 'single-speciality.html');

// Copy style.css to preview directory
fs.copyFileSync(path.join(rootDir, 'style.css'), path.join(previewDir, 'style.css'));
if (fs.cpSync) {
    fs.cpSync(path.join(rootDir, 'assets'), path.join(previewDir, 'assets'), { recursive: true });
} else {
    // Fallback if cpSync is not supported in older node versions
    if (!fs.existsSync(path.join(previewDir, 'assets'))) {
        fs.mkdirSync(path.join(previewDir, 'assets'));
    }
    fs.readdirSync(path.join(rootDir, 'assets')).forEach(file => {
        fs.copyFileSync(path.join(rootDir, 'assets', file), path.join(previewDir, 'assets', file));
    });
}
console.log('Preview directory compiled successfully.');

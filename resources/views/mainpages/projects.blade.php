@include('layouts.page2header', ['sectionId'=>'projectsection','title'=>'PROJECTS'])

@include('layouts.projectlayout', [
    'projectTitle'=>'Figma to HTML Conversion',
    'achievement'=>'Achieved 95% Bandwidth Savings',
    'link'=>'https://www.netstudio.gr/netstudio-commerce',
    'image'=>'/images/projects/netstudio.webp',
    'imgTailwind'=>'',
    'summary'=>'As a Full Stack Dev at Netstudio.gr ...',
    'details'=>'...my role involved debugging code, integrating commerce stores with Google services, and PHP coding. A highlight project is the 
                <a href="https://www.netstudio.gr/netstudio-commerce" target="_blank" class="underline text-[#00B] dark:text-[#AAF]">Netstudio Commerce</a> 
                page, where I executed a pixel-perfect conversion from Figma designs to HTML/CSS/JS. Notably, I optimized media by replacing 1.5MB+ GIFs with CSS animations, <span class="font-bold dark:text-white">reducing bandwidth usage by over 95%.</span>'
])

@include('layouts.projectlayout', [
    'projectTitle'=>'Personal Almalinux 8 Server',
    'achievement'=>'Actively hosting websites',
    'link'=>'#',
    'image'=>'/images/projects/server.svg',
    'imgTailwind'=>'p-5',
    'summary'=>'Read more...',
    'details'=>'Configured a headless Almalinux 8 server to enhance web project deployment. Implemented a robust reverse proxy using nginx, 
    ensuring secure connections through SSL certification. Developed a custom DDNS updater script, to monitor and update IPv4/IPv6 addresses via Cloudflare API.'
])

@include('layouts.projectlayout', [
    'projectTitle'=>'Wordpress for a Dentist',
    'achievement'=>'Self-hosted with Docker & Amazon SES',
    'link'=>'https://www.steliospatergiannakis.gr/',
    'image'=>'/images/projects/steliospatergiannakis.gr.webp',
    'imgTailwind'=>'',
    'summary'=>'A professional dental website...',
    'details'=>'This project was developed to enhance the online presence of my dentist. It\'s hosted on my personal AlmaLinux server, 
    leveraging <b>Docker</b> for containerization, and employs <b>Nginx as a reverse proxy</b> to efficiently manage web traffic. 
    The site is powered by WordPress, with a customized child theme based on OceanWP to ensure a unique and responsive design. 
    To enhance my skills with AWS, I integrated the contact form with <b>Amazon Simple Email Service (SES)</b> for reliable email delivery.'
])

@include('layouts.projectlayout', [
    'projectTitle'=>'Laravel Portfolio',
    'achievement'=>'Snappy & Dark Mode Ready',
    'link'=>'#',
    'image'=>'/images/projects/oacom.webp',
    'imgTailwind'=>'',
    'summary'=>'The standout feature of...',
    'details'=>'...my portfolio site, OrestisAntonopoulos.com, is its seamless integration of Laravel, PHP, and JavaScript, 
    transforming it into a dynamic single-page application (SPA). This approach eliminates traditional page reloads, 
    offering a fluid user experience enhanced by snappy animations. Additionally, I\'ve incorporated Tailwind CSS for a customizable dark mode, 
    providing users with a visually comfortable browsing option. '
])


@include('layouts.page2footer')
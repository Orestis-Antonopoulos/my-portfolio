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
    'link'=>'https://github.com/Orestis-Antonopoulos/cloudflareDDNS',
    'image'=>'/images/projects/server.svg',
    'imgTailwind'=>'p-5',
    'summary'=>'Almalinux 8 home server...',
    'details'=>'Configured a headless Almalinux 8 server to enhance web project deployment. Implemented a robust reverse proxy using nginx, 
    ensuring secure connections through SSL certification. <span class="font-bold dark:text-white">Developed a custom DDNS updater script</span>, to monitor and update IPv4/IPv6 addresses via Cloudflare API.'
])

@include('layouts.projectlayout', [
    'projectTitle'=>'Wordpress for a Dentist',
    'achievement'=>'Self-hosted with Docker & Amazon SES',
    'link'=>'https://www.steliospatergiannakis.gr/',
    'image'=>'/images/projects/steliospatergiannakis.gr.webp',
    'imgTailwind'=>'',
    'summary'=>'A professional dental website...',
    'details'=>'This project was developed to enhance the online presence of my dentist. It\'s hosted on my personal AlmaLinux server, 
    leveraging <span class="font-bold dark:text-white">Docker</span> for containerization, and employs <span class="font-bold dark:text-white">Nginx as a reverse proxy</span> to efficiently manage web traffic. 
    The site is powered by WordPress, with a customized child theme based on OceanWP to ensure a unique and responsive design. 
    To enhance my skills with AWS, I integrated the contact form with <span class="font-bold dark:text-white">Amazon Simple Email Service (SES)</span> for reliable email delivery.'
])

@include('layouts.projectlayout', [
    'projectTitle'=>'Listing Scrapper',
    'achievement'=>'Sorts Hardware by Price/Performance',
    'link'=>'#',
    'image'=>'/images/projects/scrapper.webp',
    'imgTailwind'=>'',
    'summary'=>'A proof of concent web scrapper...',
    'details'=>'It uses simplehtmldom to scrape listings of CPUs, GPUs, Desktops and Laptops from insomnia.gr and 
    sorts them by price/performance. To do that it detects the CPU/GPU model and saves each along with its benchmark score in an xml file. 
    Then it reads the xml file and sorts the listings by price/performance. There\'s also a daemonme.php file inside the project to daemonize so it runs every 15 minutes but it\'s not turned on.'
])

@include('layouts.projectlayout', [
    'projectTitle'=>'Laravel Portfolio',
    'achievement'=>'Snappy & Dark Mode Ready',
    'link'=>'https://github.com/Orestis-Antonopoulos/my-portfolio',
    'image'=>'/images/projects/oacom.webp',
    'imgTailwind'=>'',
    'summary'=>'Dockerized with Laradock...',
    'details'=>'The standout feature of my portfolio site, OrestisAntonopoulos.com, is its seamless integration of Laravel, PHP, and JavaScript, 
    transforming it into a dynamic single-page application (SPA). This approach eliminates traditional page reloads, 
    offering a fluid user experience enhanced by snappy animations. Additionally, I\'ve incorporated Tailwind CSS for a customizable <span class="font-bold dark:text-white">dark mode</span>, 
    providing users with a visually comfortable browsing option. '
])


@include('layouts.page2footer')
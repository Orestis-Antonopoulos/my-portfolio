@include('layouts.page2header', ['sectionId'=>'aboutsection','title'=>'ABOUT'])

<!-- Download my Resumes -->
<div class="flex flex-row justify-between max-w-[500px] mx-auto gap-[10px] mb-[50px]">
    <div class="p-[5px] max-w-[150px] shadow-lg rounded-xl bg-[#ffffff90] dark:bg-[#00000090] flex flex-col gap-[10px] items-center justify-between relative">
        <p class="text-[#333] dark:text-[#ccc]"><span class="font-bold text-[18px]">Developer CV</span></p>
        <svg class="flex shrink-0 w-[130px]" xmlns="http://www.w3.org/2000/svg" viewBox="120 70 280 370" xml:space="preserve">
            <path class="fill-[#fff] dark:fill-[#333]" d="M350.44 437.337H120.001V74.664H392v321.112z"/>
            <path class="fill-[#e22]" d="m204.576 273.336-25.672 31.193-10.784-10.497-7.12 7.72 18.736 18.224 32.736-39.784zm0 60.688-25.672 31.192-10.784-10.487-7.12 7.711 18.736 18.224 32.736-39.776z"/>
            <path class="fill-[#ccc] dark:fill-[#191919]" d="M232.629 282.669h118.362v8H232.629zm0 19.885h118.362v8H232.629zm0 40.806h118.362v8H232.629zm0 19.884h118.362v8H232.629zm34.738-230.457h83.075v23.44h-83.075zm0 67.913h83.075v23.44h-83.075zm0-33.961h83.075v23.44h-83.075z"/>
            <circle class="fill-[#ccc] dark:fill-[#191919]" cx="203.828" cy="153.877" r="21.13"/>
            <path fill="#008" d="M202.824 224.096 182.4 179.848s-21.408.288-21.408 20v24.264l41.832-.016zm1.976 0 20.408-44.248s21.408.288 21.408 20v24.264l-41.816-.016z"/>
            <path class="fill-[#999]" d="M203.824 182.016H191.08l12.744 28.208 12.744-28.208z"/>
            <path class="fill-[#ccc] dark:fill-[#191919]" d="M350.44 437.337v-41.561H392z"/>
        </svg>
        <div class="w-full h-full absolute flex items-center justify-center opacity-50 hover:opacity-100 cursor-pointer">
            <svg class="w-[75px] p-[15px] bg-[#00000080] dark:bg-[#ffffff80] rounded-xl" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4m4-5 5 5 5-5m-5 5V3"/>
            </svg>
        </div>
    </div>
    
    <div class="p-[5px] max-w-[150px] shadow-lg rounded-xl bg-[#ffffff90] dark:bg-[#00000090] flex flex-col gap-[10px] items-center justify-between relative">
        <p class="text-[#333] dark:text-[#ccc]"><span class="font-bold text-[18px]">Complete CV</span></p>
        <svg class="flex shrink-0 w-[130px]" xmlns="http://www.w3.org/2000/svg" viewBox="120 70 280 370" xml:space="preserve">
            <path class="fill-[#fff] dark:fill-[#333]" d="M350.44 437.337H120.001V74.664H392v321.112z"/>
            <path class="fill-[#555]" d="m204.576 273.336-25.672 31.193-10.784-10.497-7.12 7.72 18.736 18.224 32.736-39.784zm0 60.688-25.672 31.192-10.784-10.487-7.12 7.711 18.736 18.224 32.736-39.776z"/>
            <path class="fill-[#ccc] dark:fill-[#191919]" d="M232.629 282.669h118.362v8H232.629zm0 19.885h118.362v8H232.629zm0 40.806h118.362v8H232.629zm0 19.884h118.362v8H232.629zm34.738-230.457h83.075v23.44h-83.075zm0 67.913h83.075v23.44h-83.075zm0-33.961h83.075v23.44h-83.075z"/>
            <circle class="fill-[#ccc] dark:fill-[#191919]" cx="203.828" cy="153.877" r="21.13"/>
            <path fill="#000" d="M202.824 224.096 182.4 179.848s-21.408.288-21.408 20v24.264l41.832-.016zm1.976 0 20.408-44.248s21.408.288 21.408 20v24.264l-41.816-.016z"/>
            <path class="fill-[#999]" d="M203.824 182.016H191.08l12.744 28.208 12.744-28.208z"/>
            <path class="fill-[#ccc] dark:fill-[#191919]" d="M350.44 437.337v-41.561H392z"/>
        </svg>
        <div class="w-full h-full absolute flex items-center justify-center opacity-50 hover:opacity-100 cursor-pointer">
            <svg class="w-[75px] p-[15px] bg-[#00000080] dark:bg-[#ffffff80] rounded-xl" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4m4-5 5 5 5-5m-5 5V3"/>
            </svg>
        </div>
    </div>
</div>

<div class="max-w-[500px] mx-auto">
    <!-- My Strengths -->
    <details class="shadow-lg rounded-xl bg-[#ffffff90] dark:bg-[#00000090] p-[10px] mx-[4px] my-[20px]">
        <summary class="cursor-pointer text-xl font-bold text-[#333] dark:text-[#ccc]">My Strengths</summary>
        <div>
            <details class="p-[5px] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg">
                <summary class="cursor-pointer font-bold text-[#333] dark:text-[#ccc]">Problem-Solving Skills:</summary>
                <p class="text-[#555] dark:text-[#aaa] ml-[18px]">Mastered PHP and basic algorithmic challenges within two weeks, <a href="https://www.hackerrank.com/certificates/df89029b1e14" target="_blank" class="text-blue-500 hover:text-blue-700 underline">getting certified</a> and earning a <b class="text-[#000] dark:text-[#fff]">5-star rating</b> in Hackerrank's Problem Solving and <b class="text-[#000] dark:text-[#fff]">acing a timed PHP test</b> for my first developer role at Netstudio.</p>
            </details>
            <details class="p-[5px] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg">
                <summary class="cursor-pointer font-bold text-[#333] dark:text-[#ccc]">Adaptability:</summary>
                <p class="text-[#555] dark:text-[#aaa] ml-[18px]">Transitioned from foundational HTML/CSS/JS to <b class="text-[#000] dark:text-[#fff]">learning PHP, Laravel, and Tailwind on short notice.</b> Embraced the challenge with dedicated practice, successfully delivering a responsive project.</p>
            </details>
            <details class="p-[5px] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg">
                <summary class="cursor-pointer font-bold text-[#333] dark:text-[#ccc]">Teamwork and Collaboration:</summary>
                <p class="text-[#555] dark:text-[#aaa] ml-[18px]">A firm believer in the power of teamwork, I actively <b class="text-[#000] dark:text-[#fff]">support my colleagues and engage with clients</b> and project managers to ensure seamless collaboration. My experiences have taught me the critical importance of <b class="text-[#000] dark:text-[#fff]">clear communication and mutual respect</b> in driving project success.</p>
            </details>
            <details class="p-[5px] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg">
                <summary class="cursor-pointer font-bold text-[#333] dark:text-[#ccc]">Attention to Detail:</summary>
                <p class="text-[#555] dark:text-[#aaa] ml-[18px]">Demonstrated in a <a href="https://www.netstudio.gr/netstudio-commerce" target="_blank" class="text-blue-500 hover:text-blue-700 underline">project</a> where I optimized web assets by <b class="text-[#000] dark:text-[#fff]">replacing 1.5MB+ WebP images with 40KB CSS-based animations</b>, while increasing the quality. This meticulous approach to performance and aesthetics ensured a <b class="text-[#000] dark:text-[#fff]">pixel-perfect, responsive design</b>, significantly enhancing the user experience and loading times.</p>
            </details>
            <details class="p-[5px] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg">
                <summary class="cursor-pointer font-bold text-[#333] dark:text-[#ccc]">Creativity and Innovation:</summary>
                <p class="text-[#555] dark:text-[#aaa] ml-[18px]">My approach to web development intertwines technical prowess with creative problem-solving, exemplified in a project that <b class="text-[#000] dark:text-[#fff]">efficiently organizes CPU & GPU listings</b> by leveraging PHP and the Simple HTML DOM Parser for optimal data presentation. Beyond coding, my creative essence is enriched by <b class="text-[#000] dark:text-[#fff]">graphic design and multimedia production</b>, enhancing my ability to deliver visually compelling and functionally robust web solutions.</p>
            </details>
            <details class="p-[5px] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg">
                <summary class="cursor-pointer font-bold text-[#333] dark:text-[#ccc]">Project Management:</summary>
                <p class="text-[#555] dark:text-[#aaa] ml-[18px]">Demonstrated effective project delivery and management through the <b class="text-[#000] dark:text-[#fff]">successful execution of a WordPress site</b> development <a href="https://steliospatergiannakis.gr/" target="_blank" class="text-blue-500 hover:text-blue-700 underline">project for a dental practice</a>. This experience honed my abilities in understanding <b class="text-[#000] dark:text-[#fff]">client needs</b>, setting and adhering to <b class="text-[#000] dark:text-[#fff]">timelines</b>, and delivering tailored solutions that meet specific goals.</p>
            </details>
        </div>
    </details>


    <!-- A lifelong story -->
    <details class="shadow-lg rounded-xl bg-[#ffffff90] dark:bg-[#00000090] p-[10px] mx-[4px] my-[20px]">
        <summary class="cursor-pointer text-xl font-bold text-[#333] dark:text-[#ccc]">A lifelong story</summary>
        <div class="relative flex items-center"><p class="absolute -rotate-90 -translate-x-5 text-2xl font-bold text-[#00000050] dark:text-[#ffffff50]">1996</p>
            <p class="p-[5px] text-[#555] dark:text-[#aaa] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg ml-[18px]">From a young age, the allure of coding captivated me. In 1996, as a <b class="text-[#000] dark:text-[#fff]">10-year-old, I dabbled in Q-basic</b>, creating interactive questionnaires reminiscent of those found in magazines, a simple yet profound introduction to the world of programming.</p>
        </div>
        <div class="relative flex items-center"><p class="absolute -rotate-90 -translate-x-5 text-2xl font-bold text-[#00000050] dark:text-[#ffffff50]">2007</p>
        <p class="p-[5px] text-[#555] dark:text-[#aaa] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg ml-[18px]">In my twenties, <b class="text-[#000] dark:text-[#fff]">composing music</b> for my band with Guitar Pro mirrored coding: both combine elements-notes into cohesive structures, highlighting <b class="text-[#000] dark:text-[#fff]">a shared foundation in pattern recognition and creative synthesis</b>.</p>
        </div>
        <div class="relative flex items-center"><p class="absolute -rotate-90 -translate-x-5 text-2xl font-bold text-[#00000050] dark:text-[#ffffff50]">2008</p>
            <p class="p-[5px] text-[#555] dark:text-[#aaa] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg ml-[18px]">Though my initial foray into the digital world was through affiliate marketing and WordPress administration, but i wad led to believe by <b class="text-[#000] dark:text-[#fff]">a misconception that formal university education was the only path to becoming a programmer</b>, momentarily diverting me from my dream.</p>
        </div>
        <div class="relative flex items-center"><p class="absolute -rotate-90 -translate-x-5 text-2xl font-bold text-[#00000050] dark:text-[#ffffff50]">2013</p>
            <p class="p-[5px] text-[#555] dark:text-[#aaa] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg ml-[18px]">However, my passion for problem-solving reemerged at Abbadco. <b class="text-[#000] dark:text-[#fff]">I crafted tools with Ms Excel that streamlined payroll calculations and valuable business insights</b>, blending my love for analysis with practical utility.</p>
        </div>
        <div class="relative flex items-center"><p class="absolute -rotate-90 -translate-x-5 text-2xl font-bold text-[#00000050] dark:text-[#ffffff50]">2021</p>
            <p class="p-[5px] text-[#555] dark:text-[#aaa] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg ml-[18px]">My role at a Foodservice Equipment Supplier further honed my <b class="text-[#000] dark:text-[#fff]">Wordpress</b> administrative skills and problem solving particularly through a bespoke <b class="text-[#000] dark:text-[#fff]">Excel tool that became indispensable for managing client relationships</b>.</p>
        </div>
        <div class="relative flex items-center"><p class="absolute -rotate-90 -translate-x-5 text-2xl font-bold text-[#00000050] dark:text-[#ffffff50]">2022</p>
            <p class="p-[5px] text-[#555] dark:text-[#aaa] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg ml-[18px]">Amidst the routine of warehouse work, was that my passion for programming reignited. <b class="text-[#000] dark:text-[#fff]">Self-study through books and FreeCodeCamp.org</b> transformed my curiosity into a tangible skill set, culminating in a challenging yet rewarding task from my future employer: mastering PHP, Laravel, and Tailwind CSS to bring a Figma design to life.</p>
        </div>
        <div class="relative flex items-center"><p class="absolute -rotate-90 -translate-x-5 text-2xl font-bold text-[#00000050] dark:text-[#ffffff50]">2023</p>
            <p class="p-[5px] text-[#555] dark:text-[#aaa] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg ml-[18px]">April that year marked the <b class="text-[#000] dark:text-[#fff]">beginning of what I consider my dream job</b>, a testament to perseverance and the joy of finding one's calling. Although my journey there was cut short, the experience solidified my resolve to pursue web development relentlessly.</p>
        </div>
        <div class="relative flex items-center"><p class="absolute -rotate-90 -translate-x-7 text-2xl font-bold text-[#00000050] dark:text-[#ffffff50]">TODAY</p>
            <p class="p-[5px] text-[#555] dark:text-[#aaa] bg-[#fff] dark:bg-[#000] m-[10px] rounded-lg shadow-lg ml-[18px]">Today, I stand <b class="text-[#000] dark:text-[#fff]">committed to this path</b>, enriched by every twist and turn of my journey. Web development is not just a profession for me; it's a lifelong passion, a constant source of fulfillment and discovery.</p>
        </div>
        

</div>

@include('layouts.page2footer')
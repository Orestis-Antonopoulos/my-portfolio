@include('layouts.page2header', ['sectionId'=>'skillssection','title'=>'SKILLS'])

        <div id="Languages">
            <span class="dark:text-[#ddd]">Languages:</span>
            <div class="flex flex-row gap-[3px] sm:gap-[5px] mt-[1px] mb-[15px]">
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">PHP</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/php.svg') }}" alt="A pixelated icon of PHP" class="h-[33px] sm:h-[47px] clickthrough" style="image-rendering: pixelated;">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">JavaScript</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/javascript.svg') }}" alt="A pixelated icon of Javascript" class="h-[33px] sm:h-[47px] clickthrough" style="image-rendering: pixelated;">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">Bash</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/bash.svg') }}" alt="A pixelated icon of Bash scripting" class="h-[33px] sm:h-[47px] clickthrough rounded" style="image-rendering: pixelated;">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">HTML</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/html.svg') }}" alt="An icon of HTML" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">CSS</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/css.svg') }}" alt="An icon of CSS" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
            </div>
        </div>
        <div id="Frameworks">
            <span class="dark:text-[#ddd]">Frameworks:</span>
            <div class="flex flex-row gap-[3px] sm:gap-[5px] mt-[1px] mb-[15px]">
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">Laravel</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/laravel.svg') }}" alt="An icon of Laravel" class="h-[33px] sm:h-[47px] clickthrough">
                </div>  
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">Tailwind</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/tailwind.svg') }}" alt="An icon of Tailwind" class="h-[33px] sm:h-[47px] clickthrough">
                </div>  
            </div>
        </div>
        <div id="Tools&Tech">
            <span class="dark:text-[#ddd]">Tools & Technologies:</span>
            <div class="flex flex-row gap-[3px] sm:gap-[5px] mt-[1px] mb-[15px]">
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">GIT</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/git.svg') }}" alt="An icon of git" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">VSCode</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/vscode.svg') }}" alt="An icon of vscode" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">MySQL</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/mysql.svg') }}" alt="An icon of mysql" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">NGiNX</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/nginx.svg') }}" alt="An icon of nginx" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">Linux</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/linux.svg') }}" alt="An icon of Linux" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
            </div>
        </div>
        <div id="extras">
            <span class="dark:text-[#ddd]">Additional Skills:</span>
            <div class="flex flex-row gap-[3px] sm:gap-[5px] mt-[1px] mb-[15px]">
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">Excel</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/excel.svg') }}" alt="An icon of excel" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">Photoshop</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/photoshop.svg') }}" alt="An icon of photoshop" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">Premiere</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/premiere.svg') }}" alt="An icon of premiere" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
                <div class="w-[60px] h-[60px] sm:w-[80px] sm:h-[80px] rounded flex justify-center items-center p-[5px] group relative" style="background:#FFFFFF50;">
                    <div class="absolute bottom-full mb-[-10px] clickthrough tooltip-content">
                        <div class="bg-black text-white text-xs sm:text-base font-bold rounded py-1 px-2 right-0">Audacity</div> <!-- Tooltip title -->
                        <div class="w-3 h-3 bg-black rotate-45 absolute -bottom-1 left-0 right-0 mx-auto" style="z-index:-1;"></div> <!-- Tooltip arrow -->
                    </div>
                    <img src="{{ asset('images/skills/audacity.svg') }}" alt="An icon of audacity" class="h-[33px] sm:h-[47px] clickthrough">
                </div>
            </div>
        </div>
    

@include('layouts.page2footer')
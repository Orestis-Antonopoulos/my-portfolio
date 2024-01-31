@extends('layouts.app')

@section('header')
<style>
.toggle-wrapper {
    position: relative;
    display: inline-block;
  }

  .firstsvg {
      fill: #bbb; /* Default fill color */
      transition: fill 0.3s ease; /* Smooth transition for color change */
    }
  .toggle-wrapper input[type="checkbox"]:checked ~ .firstsvg {
    fill: #fff; /* Change to your preferred "checked" color */
  }
  
    .secondsvg {
        fill: #bbb; /* Default fill color */
        transform: translate(0, -100%);
        opacity: 0;
    }
    .toggle-wrapper input[type="checkbox"]:checked ~ .secondsvg {
      fill: #fff; /* Change to your preferred "checked" color */
      animation: blurAnimation 2s infinite; /* Apply the animation */
    }
    @keyframes blurAnimation {
    0%, 100% {
      filter: blur(3px);
      opacity: 50%;
    }
    50% {
      filter: blur(4px);
      opacity: 100%;
    }
  }

</style>

<div id="topcontrols">
    <ul class="flex gap-[10px] justify-end">
        <label class="toggle-wrapper rounded-lg w-[50px] h-[50px] flex justify-center items-center cursor-pointer
            bg-[#00006665] hover:bg-[#0000AA65] has-[:checked]:bg-[#0000FF65]">
            <input type="checkbox" class="opacity-0 absolute w-full h-full">
            <svg class="firstsvg p-[10px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512.001 512.001">
                <path d="M167.228 82.855v272.542c-15.859-14.147-36.757-22.76-59.632-22.76-49.45 0-89.681 40.231-89.681 89.682s40.231 89.682 89.681 89.682c49.389 0 89.578-40.13 89.68-89.495h.002V203.475l266.757-67.621v147.195c-15.859-14.147-36.757-22.76-59.631-22.76-49.451 0-89.682 40.231-89.682 89.681 0 49.451 40.231 89.682 89.682 89.682 49.45 0 89.681-40.232 89.681-89.682V0L167.228 82.855z"/>
            </svg>
            <svg class="secondsvg absolute p-[10px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512.001 512.001">
                <path d="M167.228 82.855v272.542c-15.859-14.147-36.757-22.76-59.632-22.76-49.45 0-89.681 40.231-89.681 89.682s40.231 89.682 89.681 89.682c49.389 0 89.578-40.13 89.68-89.495h.002V203.475l266.757-67.621v147.195c-15.859-14.147-36.757-22.76-59.631-22.76-49.451 0-89.682 40.231-89.682 89.681 0 49.451 40.231 89.682 89.682 89.682 49.45 0 89.681-40.232 89.681-89.682V0L167.228 82.855z"/>
            </svg>
        </label>

        <label class="toggle-wrapper rounded-lg w-[50px] h-[50px] flex justify-center items-center cursor-pointer
            bg-[#00006665] hover:bg-[#0000AA65] has-[:checked]:bg-[#0000FF65]">
            <input type="checkbox" class="opacity-0 absolute w-full h-full" checked>
            <svg class="firstsvg p-[10px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve">
                <path d="M9.383 3.076A1 1 0 0 1 10 4v12a1 1 0 0 1-1.707.707L4.586 13H2a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h2.586l3.707-3.707a1 1 0 0 1 1.09-.217zm5.274-.147a1 1 0 0 1 1.414 0C17.88 4.737 19 7.239 19 9.999s-1.12 5.263-2.929 7.072a1 1 0 0 1-1.414-1.414A7.971 7.971 0 0 0 17 10a7.97 7.97 0 0 0-2.343-5.657 1 1 0 0 1 0-1.414zm-2.829 2.828a1 1 0 0 1 1.415 0A5.983 5.983 0 0 1 15 10a5.984 5.984 0 0 1-1.757 4.243 1 1 0 0 1-1.415-1.415A3.984 3.984 0 0 0 13 10a3.983 3.983 0 0 0-1.172-2.828 1 1 0 0 1 0-1.415z" data-original="#000000" fill-rule="evenodd" clip-rule="evenodd"/>
            </svg>
            <svg class="secondsvg absolute p-[10px]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20" style="enable-background:new 0 0 512 512" xml:space="preserve">
                <path d="M9.383 3.076A1 1 0 0 1 10 4v12a1 1 0 0 1-1.707.707L4.586 13H2a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h2.586l3.707-3.707a1 1 0 0 1 1.09-.217zm5.274-.147a1 1 0 0 1 1.414 0C17.88 4.737 19 7.239 19 9.999s-1.12 5.263-2.929 7.072a1 1 0 0 1-1.414-1.414A7.971 7.971 0 0 0 17 10a7.97 7.97 0 0 0-2.343-5.657 1 1 0 0 1 0-1.414zm-2.829 2.828a1 1 0 0 1 1.415 0A5.983 5.983 0 0 1 15 10a5.984 5.984 0 0 1-1.757 4.243 1 1 0 0 1-1.415-1.415A3.984 3.984 0 0 0 13 10a3.983 3.983 0 0 0-1.172-2.828 1 1 0 0 1 0-1.415z" data-original="#000000" fill-rule="evenodd" clip-rule="evenodd"/>
            </svg>
        </label>
        <li class="rounded-lg w-[50px] h-[50px]" style="background:#FFFFFF50"></li>
    </ul>
</div>
@endsection

@section('content')
<div id="homeintroduction" 
    class="mt-[10px] px-[5px] mx-auto py-[10px] gap-2 flex items-center justify-center rounded-xl shadow-xl max-w-[620px] min-w-[300px] h-[150px] sm:h-[200px]" 
    style="background:#FFFFFF50">
    <div class="w-[100px] sm:w-[150px] flex-shrink-0 flex flex-col">
        <img src="{{ asset('images/mahface.webp') }}" alt="My face" class="w-[100px] h-[100px] sm:w-[150px] sm:h-[150px] rounded-full">
        <span class="text-center mt-[5px] text-sm sm:text-base font-bold h-[30px]" style="color:#00000090; line-height:1rem;">Orestis <br> Antonopoulos</span>
    </div>
    <div class="flex justify-center px-[5px]">
        <span class="font-bold text-sm sm:text-base" style="color:#00000090;"> 
        Hello! I'm a Junior Full-Stack Developer with a knack for audio-visuals, 
        currently exploring the dynamic world of DevOps.
        </span>
    </div>
</div>

<div id="homebuttons" class="absolute bottom-2 flex flex-col items-center w-full"> {{-- 4 Main Buttons --}}
    <div class="flex gap-2 mb-2">
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-ss-3xl buttonhover" 
            onclick="selectAbout()">
            <img src="{{ asset('svg/aboutabd.svg') }}" alt="Description of the icon" class="w-[40px] clickthrough">
            <span class="text-base font-bold absolute clickthrough" style="transform:rotate(-90deg) translate(0,38px); color:#BBB;"> ABOUT </span>
        </button>
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-se-3xl buttonhover" 
            onclick="selectContact()">
            <img src="{{ asset('svg/contactabd.svg') }}" alt="Description of the icon" class="w-[50px] clickthrough">
            <span class="text-base font-bold absolute clickthrough" style="transform:rotate(90deg) translate(0,38px); color:#BBB;"> CONTACT </span>
        </button>
    </div>
    <div class="flex gap-2">
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-es-3xl buttonhover" 
            onclick="selectProject()">
            <img src="{{ asset('svg/projectsabd.svg') }}" alt="Description of the icon" class="w-[40px] clickthrough">
            <span class="text-base font-bold absolute clickthrough" style="transform:rotate(-90deg) translate(0,38px); color:#BBB;"> PROJECTS </span>
        </button>
        <button class="w-[85px] h-[75px] flex flex-col items-center justify-center hover:cursor-pointer relative rounded-ee-3xl buttonhover" 
            onclick="selectSkills()">
            <img src="{{ asset('svg/skillsabd.svg') }}" alt="Description of the icon" class="w-[40px] clickthrough">
            <span class="text-base font-bold absolute clickthrough" style="transform:rotate(90deg) translate(0,38px); color:#BBB;"> SKILLS </span>
        </button>
    </div>
</div>

@endsection

@section('scripts')
<script>
function addClass(elementId, className) {
    var element = document.getElementById(elementId);
    if (element.classList.contains(className)) {
        //do nothing
    } else {
        element.classList.add(className);
    }
}
function removeClass(elementId, className) {
    var element = document.getElementById(elementId);
    if (element.classList.contains(className)) {
        element.classList.remove(className);
    } else {
        //do nothing
    }
}
function hideHome() {
    var homeIntroduction = document.getElementById('homeintroduction');
    var homeButtons = document.getElementById('homebuttons');
    addClass(homeButtons.id, 'clickthrough');
    addClass(homeButtons.id, 'fade-out-down');
    addClass(homeIntroduction.id, 'fade-out-left');
    requestAnimationFrame(function() {
        setTimeout(() => {
            addClass(homeButtons.id, 'hidden');
            addClass(homeIntroduction.id, 'hidden');
            removeClass(homeButtons.id, 'clickthrough');
            removeClass(homeButtons.id, 'fade-out-down');
            removeClass(homeIntroduction.id, 'fade-out-left');
        }, 250);
    });
}
function backHome() {
    var homeIntroduction = document.getElementById('homeintroduction');
    var homeButtons = document.getElementById('homebuttons');
    var aboutSection = document.getElementById('aboutsection');
    var contactSection = document.getElementById('contactsection');
    var projectSection = document.getElementById('projectsection');
    var skillsSection = document.getElementById('skillssection');
    if(!aboutSection.classList.contains('hidden')) {
        addClass(aboutSection.id, 'fade-out-right');
        requestAnimationFrame(function() {
            setTimeout(() => {
                addClass(aboutSection.id, 'hidden');
                removeClass(aboutSection.id, 'fade-out-right');
                removeClass(homeButtons.id, 'hidden');
                removeClass(homeIntroduction.id, 'hidden');
                addClass(homeButtons.id, 'fade-in-up');
                addClass(homeIntroduction.id, 'fade-in-right');
            }, 250);
        });
        requestAnimationFrame(function() {
            setTimeout(() => {
                removeClass(homeButtons.id, 'fade-in-up');
                removeClass(homeIntroduction.id, 'fade-in-right');
            }, 500);
        });
    } else if(!contactSection.classList.contains('hidden')) {
        addClass(contactSection.id, 'fade-out-right');
        requestAnimationFrame(function() {
            setTimeout(() => {
                addClass(contactSection.id, 'hidden');
                removeClass(contactSection.id, 'fade-out-right');
                removeClass(homeButtons.id, 'hidden');
                removeClass(homeIntroduction.id, 'hidden');
                addClass(homeButtons.id, 'fade-in-up');
                addClass(homeIntroduction.id, 'fade-in-right');
            }, 250);
        });
        requestAnimationFrame(function() {
            setTimeout(() => {
                removeClass(homeButtons.id, 'fade-in-up');
                removeClass(homeIntroduction.id, 'fade-in-right');
            }, 500);
        });
    } else if(!projectSection.classList.contains('hidden')) {
        addClass(projectSection.id, 'fade-out-right');
        requestAnimationFrame(function() {
            setTimeout(() => {
                addClass(projectSection.id, 'hidden');
                removeClass(projectSection.id, 'fade-out-right');
                removeClass(homeButtons.id, 'hidden');
                removeClass(homeIntroduction.id, 'hidden');
                addClass(homeButtons.id, 'fade-in-up');
                addClass(homeIntroduction.id, 'fade-in-right');
            }, 250);
        });
        requestAnimationFrame(function() {
            setTimeout(() => {
                removeClass(homeButtons.id, 'fade-in-up');
                removeClass(homeIntroduction.id, 'fade-in-right');
            }, 500);
        });
    } else if(!skillsSection.classList.contains('hidden')) {
        addClass(skillsSection.id, 'fade-out-right');
        requestAnimationFrame(function() {
            setTimeout(() => {
                addClass(skillsSection.id, 'hidden');
                removeClass(skillsSection.id, 'fade-out-right');
                removeClass(homeButtons.id, 'hidden');
                removeClass(homeIntroduction.id, 'hidden');
                addClass(homeButtons.id, 'fade-in-up');
                addClass(homeIntroduction.id, 'fade-in-right');
            }, 250);
        });
        requestAnimationFrame(function() {
            setTimeout(() => {
                removeClass(homeButtons.id, 'fade-in-up');
                removeClass(homeIntroduction.id, 'fade-in-right');
            }, 500);
        });
    }
    requestAnimationFrame(function() {
        setTimeout(() => {
            removeClass(homeButtons.id, 'fade-in-right');
            removeClass(homeIntroduction.id, 'fade-in-right');
        }, 500);
    });
}
function selectAbout() {
    var aboutSection = document.getElementById('aboutsection');
    hideHome();
    requestAnimationFrame(function() {
            removeClass(aboutSection.id, 'hidden');
            addClass(aboutSection.id, 'fade-in-left');
    });
    requestAnimationFrame(function() {
        setTimeout (() => {
            removeClass(aboutSection.id, 'fade-in-left');
        }, 500);
    });
}
function selectContact() {
    var contactSection = document.getElementById('contactsection');
    hideHome();
    requestAnimationFrame(function() {
            removeClass(contactSection.id, 'hidden');
            addClass(contactSection.id, 'fade-in-left');
    });
    requestAnimationFrame(function() {
        setTimeout (() => {
            removeClass(contactSection.id, 'fade-in-left');
        }, 500);
    });
}
function selectProject() {
    var projectSection = document.getElementById('projectsection');
    hideHome();
    requestAnimationFrame(function() {
            removeClass(projectSection.id, 'hidden');
            addClass(projectSection.id, 'fade-in-left');
    });
    requestAnimationFrame(function() {
        setTimeout (() => {
            removeClass(projectSection.id, 'fade-in-left');
        }, 500);
    });
}
function selectSkills() {
    var skillsSection = document.getElementById('skillssection');
    hideHome();
    requestAnimationFrame(function() {
            removeClass(skillsSection.id, 'hidden');
            addClass(skillsSection.id, 'fade-in-left');
    });
    requestAnimationFrame(function() {
        setTimeout (() => {
            removeClass(skillsSection.id, 'fade-in-left');
        }, 500);
    });
}

</script>
@endsection

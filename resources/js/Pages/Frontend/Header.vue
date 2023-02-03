<script setup>
import { ref, onMounted } from "vue";
const scrollBg = ref(false);
const showMenu = ref(false);

const setScrollBg = (value) => {
    scrollBg.value = value;
};

const setMenu = (value) =>{
    showMenu.value = value;
}

onMounted(() => {
    window.addEventListener("scroll", () => {
        return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
    });
    window.addEventListener('click', function(e){
        if (!document.getElementById('menu').contains(e.target) && (!document.getElementById('menu-logo').contains(e.target))){
        setMenu(false);
       }  
    });
});

function langEn(){ document.location="en";}
function langTr(){ document.location="tr";}
</script>
<template>
    <nav class="w-full fixed flex z-20  item-center  justify-center max-w-screen-2xl"
        :class="{ ' bg-black bg-opacity-60 h-12 transition-all duration-300': scrollBg, ' bg-black bg-opacity-30 h-16 transition-all duration-300': !scrollBg, }">
        <div class="w-full flex justify-between items-center">
            <a href="https://hasanyildiz.iyiapp.com"
            aria-label="Read more about Seminole tax hike"
                class="h-full flex justify-center  pl-4  items-center text-old_green hover:text-white text-2xl font-extrabold hover:scale-110 transition-transform duration-150">
                HASAN YILDIZ
            </a>

            <ul class="hidden lg:flex flex-row px-4 justify-center items-center">
                <li class="flex flex-row  items-center justify-center">
                    <a href="#home" class="pl-4 mybutton ">{{ $t("home") }}</a>
                    <a href="#skills" class=" pl-4 mybutton">{{ $t("skills") }}</a>
                    <a href="#projects" class=" pl-4 mybutton">{{ $t("projects") }}</a>
                    <a href="#footer" class="pl-4 mybutton">{{ $t("contact") }}</a>
                </li>
            </ul>

            <ul id='menu' class="absolute top-0 w-full py-10 flex lg:hidden flex-row justify-center items-center bg-old_green text-black" 
                v-if="showMenu">
                <li class="flex flex-col lg:flex-row  items-center justify-center text-2xl font-extrabold">
                    <a href="#home" class="py-6 ">{{ $t("home") }}</a>
                    <a href="#skills" class="">{{ $t("skills") }}</a>
                    <a href="#projects" class="py-6 ">{{ $t("projects") }}</a>
                    <a href="#footer" class="">{{ $t("contact") }}</a>
                </li>
            </ul>

            <div class="pr-2 flex flex-row items-center justify-center">
                <button @click="langEn" class=" flex items-center justify-center hover:scale-110" >
                    <img  src="/img/eng.webp" alt="English" class="h-8 object-contain" loading="lazy">
                </button>
                <button @click="langTr" class="pl-1 lg:pl-2 flex items-center justify-center hover:scale-110">
                    <img src="/img/tr.webp" alt="Turkish" class=" h-8 object-contain" loading="lazy">
                </button>
                <button id='menu-logo'  class="pl-1 lg:pl-2 flex lg:hidden items-center justify-center z-30" @click="setMenu(!showMenu)">
                    <img  src="/img/menu.webp" alt="Menu" class="h-8 object-contain">
                </button>
            </div>
            
        </div>
    </nav>
</template>

<style scoped>

</style>
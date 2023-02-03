<script setup>
import Project from "./Project.vue";
import { ref, onMounted } from "vue";

onMounted(() => {
    window.addEventListener("touchstart", function(e){
        if (document.getElementById('projectsContainer').contains(e.target)){
        document.getElementById('swipeImage').style.opacity ="0";
        } 
    });
    window.addEventListener("click", function(e){
        if (document.getElementById('projectsContainer').contains(e.target)){
        document.getElementById('swipeImage').style.opacity ="0";
        } 
    });
});

const projectsArray=[{id:"1",category:"Website"},{id:"2",category:"Mobile"},{id:"3",category:"Robot"}];
const props = defineProps({
  skills: Object,
  projects: Object,
});
const filteredProjects = ref(props.projects.data);
const selectedSkill = ref("all");
const filterProjects = (category) => {
  if (category === "all") {
    filteredProjects.value = props.projects.data;
    selectedSkill.value = category;
  } else {
    filteredProjects.value = props.projects.data.filter((project) => {
      return project.category === category;
    });
    selectedSkill.value = category;
  }
};
</script>

<template>
  <section class="">
    <nav class="lg:my-4 mx-6 border-b-2 border-old_green dark:text-dark-navy-100">
      <ul class=" flex flex-row justify-evenly items-center">

        <div class="flex flex-col lg:flex-row items-center justify-center">
          <div class="flex flex-row items-center justify-center">
            <li class="cursor-pointer capitalize m-2 lg:m-4">
              <button
                @click="filterProjects('all')"
                class="font-bold  flex text-center px-24 lg:px-8 py-2 hover:bg-white hover:text-black text-white rounded-md"
                :class="[selectedSkill === 'all' ? 'bg-white text-black' : 'bg-old_green',]">
                {{$t("all")}}
              </button>
            </li>
          </div>
          <div class="flex flex-row items-center justify-center">            
            <li
              class="cursor-pointer capitalize m-2 lg:m-4"
              v-for="projects in projectsArray" :key="projects.id">
              <button
                @click="filterProjects(projects.category)"
                class="font-bold flex text-center px-4 py-2 hover:bg-white hover:text-black text-white rounded-md"
                :class="[
                  selectedSkill == projects.category ? 'bg-white text-black' : 'bg-old_green']" >
                {{ projects.category }}
              </button>
            </li>
          </div>
        </div>
      </ul>
    </nav>
    <!-- lg:grid lg:gap-y-12 lg:grid-cols-4 lg:gap-8  -->
    <div id="projectsContainer" class="w-full flex items-center justify-center">
          <div id="swipeImage" class="absolute w-full flex lg:hidden items-center justify-center z-10 opacity-100 transition-all duration-1000"> 
            <img src="/img/swipe.webp" alt="Swipe Button" class="w-24 object-contain animate-[leftRight_2s_infinite]" loading="lazy">
          </div>
          <section class="px-10 w-full pt-4 py-10  flex flex-row lg:grid lg:gap-y-12 lg:grid-cols-4 gap-8 lg:gap-8 overflow-x-scroll lg:overflow-hidden">
            <Project v-for="project in filteredProjects" :key="project.id" :project="project"/>
          </section>
    </div>

  </section>
</template>
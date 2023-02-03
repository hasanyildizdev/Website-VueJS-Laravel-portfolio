<script setup>
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Pages/Frontend/Hero.vue";
import Skills from "@/Pages/Frontend/Skills.vue";
import MyProjects from "@/Pages/Frontend/MyProject.vue";
import CallButton from "@/Pages/Frontend/CallButton.vue";

defineProps({
  skills: Object,
  projects: Object,
});

</script>

<template>
    <FrontendLayout>
      <!-- Hero -->
      <Hero/>
      <!-- Skills -->
      <Skills :skills="skills"/> 
      <!-- Projects -->
      <MyProjects :skills="skills" :projects="projects"/>
      <!-- Call Button -->
      <CallButton/>
    </FrontendLayout>
</template>

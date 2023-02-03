
<script setup>
import Header from "@/Pages/Frontend/Header.vue";
import Footer from "@/Pages/Frontend/Footer.vue";
</script>
<template>
  <div>
    <!-- Header -->
    <Header />
    <main>
      <slot />
    </main>
    <!-- Footer -->
    <Footer />
  </div>
</template>
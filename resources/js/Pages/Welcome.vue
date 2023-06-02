<script setup>
import { Head, Link } from "@inertiajs/vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";
import Services from "@/Components/Frontend/Services.vue";
import ContactMe from "@/Components/Frontend/ContactMe.vue";

defineProps({
  skills: Object,
});
</script>

<template>
  <Head title="Welcom to portfolio" />
  <FrontendLayout>
    <!-- Hero primary -->
    <Hero :skills="skills" />
    <!-- Promote tail-100 -->
    <Promote />
    <!-- About secondary -->
    <About />
    <!-- Portfolio primary -->
    <!-- Services secondary-->
    <Services />
    <!-- Contact primary -->
    <ContactMe/>
  </FrontendLayout>
</template>

<style></style>

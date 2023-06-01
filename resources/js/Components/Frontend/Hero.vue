<template>
    <section id="home" class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden">
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-3xl text-orange-400 text-md mb-[22px]">Hey, I'm SANHDP!</p>
                    <h1 class="text-4xl leading-[44px] md:text-5xl md:leading-light lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                        Laravel<br/> Back End Developer
                    </h1>
                    <div>
                        <h2 class="text-2xl text-orange-500 mt-5">My Skills:</h2>
                        <div class="grid grid-cols-8 md:grid-flow-col mt-8">
                            <div class="flex items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                                <img :src="skill.image" :alt="skill.name" class="lg:h-10 ml-12 mr-10">
                            </div>
                        </div>
                    </div>
                    <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-center lg:text-left">

                    </p>
                    <button class="btn btn-md bg-accent hover:bg-black dark:hover:text-dark-navy-100 md:btn-lg transition-all">
                        Work with me
                    </button>
                </div>
                <div class="flex flex-1 justify-center items-center h-full rounded-lg mt-8 md:mt-0">
                    <img class="p-2 lg:h-[45vh] rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="https://portfolio.me/img/avatar.jpg" alt="avatar">
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
    defineProps({
        skills: Object,
    })
</script>

<style>

</style>
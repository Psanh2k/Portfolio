<template>
    <section id="home" class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden">
        <div v-motion :initial="{opacity:0, y:100,}" :visible="{opacity:1, y:0,}" class="container mx-auto h-full">
            <div class="flex flex-col mt-14">
                <div class="flex flex-col md:flex-row items-center h-full pt-8">
                    <div class="flex-1 flex flex-col lg:items-start">
                        <div class="text-lg text-3xl text-center px-10 text-orange-400 text-md mb-[22px] text-gt">Chào  mừng  Quý  khách đến  với VeggieSaigon <br> Cổng thông tin trực tuyến về  ẩm thực chay <br> Sài Gòn - Hội  An  - Đà  Nẵng.</div>
                        <div class="grid md:grid-cols-2 xs:grid-cols-1 gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="/img/mediums/DT_HCM.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="/img/mediums/NVT_HCM.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="/img/mediums/MDD_DN.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="/img/mediums/THD_HA.jpg" alt="">
                            </div>
                        </div>
                        <div class="mt-10" style="width: 100%;">
                            <button style="margin:auto;" class="btn btn-md bg-accent w-[300px] hover:bg-black dark:hover:text-dark-navy-100 md:btn-lg transition-all">
                                More Infor
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-1 justify-center items-center h-full rounded-lg mt-8 md:mt-0">
                        <img style="width:400px" class="p-2 lg:h-[45vh] rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="img/avatar.png" alt="avatar">
                    </div>
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
.text-gt {
    text-align: center;
    font: bold;
    font-size: 30px;
}
</style>
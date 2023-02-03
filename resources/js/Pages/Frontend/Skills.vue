<script setup>
defineProps({
    skills: Object,
});
</script>
<template >
    <section id="skills" class="py-8 lg:py-16 flex justify-center items-center max-w-screen-2xl bg-black">
        <div class="container" v-motion-pop-visible>
            <div class="h-full w-full flex items-center justify-center">
                <div class="h-full w-full mx-2 lg:mx-16 bg-old_green border-2 border-black rounded-lg">
                    <div class="flex flex-col">
                        <div class="flex flex-row items-center justify-between">
                            <div class="pl-2 lg:pl-4 ">
                                <img src="/img/column_l.webp" alt="" class="h-full w-auto lg:w-16 object-contain" loading="lazy">
                            </div>

                            <div class="flex flex-col items-center justify-center">
                                <div class="pt-2 flex justify-center items-center text-2xl lg:text-4xl font-anton text-black">
                                    {{$t("experiences")}}
                                </div>
                                
                                <div class="flex flex-row items-center justify-center">
                                    <div class=" lg:hidden flex items-center justify-center">
                                        <img src="/img/arrow_l.webp" alt="Left Arrow" class="w-10 object-contain">
                                    </div>
                                    <div class="flex items-center justify-center ">
                                        <div class="w-full mx-2 my-4 lg:my-10 lg:w-full flex flex-row overflow-x-scroll lg:overflow-hidden rounded-xl xl:rounded-none">
                                            <div class="mx-2 flex-shrink-0 lg:flex-shrink flex items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                                                <img :src="skill.image" :alt="skill.name" loading="lazy" class="w-16 h-auto lg:w-24 lg:h-24 object-contain" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" lg:hidden flex items-center justify-center">
                                        <img src="/img/arrow_r.webp" alt="Right Arrow" class="w-10 object-contain">
                                    </div>
                                </div>
                            </div>

                            <div class="pr-2 lg:pr-4">
                                <img src="/img/column_r.webp" alt="" class="h-full w-auto lg:w-16 object-contain" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
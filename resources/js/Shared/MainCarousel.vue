<template>
    <div class="relative">
        <div class="bg-black">
            <Container class="md:max-w-none sm:max-w-none mx-auto px-0">
                <Carousel
                    @next="next"
                    @prev="prev"
                >
                    <CarouselSlide :index="0" :visibleSlide="visibleSlide" :direction="direction">
                        <img
                            src="/images/showcase/commercial-tyres.webp"
                            srcset="/images/showcase/commercial-tyres.webp 2560w,
                                    /images/showcase/commercial-tyres-500.webp 500w,
                                    /images/showcase/commercial-tyres.webp 300w"
                            class="object-cover object-center w-full h-full brightness-[0.4]"
                            sizes="(min-width: 1536px) 1280px, (min-width: 1280px) 1152px, (min-width: 1024px) 896px, 100vw"
                            alt="Mobile Tyres Beaconsfield Mobile Tyres Van"
                        >
                        <div class="absolute left-[15%] right-[15%] md:top-24 md:translate-y-0 top-1/2 -translate-y-1/2 pt-5 pb-5 text-white text-center">
                            <h1 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-1">We Come To You!</h1>
                            <p class="sm:text-sm text-xs text-center">Our mobile tyre fitting service is your convenient solution</p>
                        </div>
                    </CarouselSlide>
                    <CarouselSlide :index="1" :visibleSlide="visibleSlide" :direction="direction">
                        <img
                            src="/images/showcase/mobile-tyre-fitting.webp"
                            srcset="/images/showcase/mobile-tyre-fitting.webp 1000w,
                                    /images/showcase/mobile-tyre-fitting-500.webp 500w,
                                    /images/showcase/mobile-tyre-fitting.webp 300w"
                            class="object-cover object-center w-full h-full"
                            sizes="(min-width: 1536px) 1280px, (min-width: 1280px) 1152px, (min-width: 1024px) 896px, 100vw"
                            alt="Mobile Tyre Fitting"
                        >
                        <div class="absolute left-[15%] right-[15%] md:top-24 md:translate-y-0 top-1/2 -translate-y-1/2 pt-5 pb-5 text-white text-center">
                            <h1 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-1">Mobile Tyre Fitting</h1>
                            <p class="sm:text-sm text-xs text-center">Same day service for emergencies & non-emergencies.</p>
                        </div>
                    </CarouselSlide>
                    <CarouselSlide :index="2" :visibleSlide="visibleSlide" :direction="direction">
                        <img
                            src="/images/showcase/puncture-repair.webp"
                            srcset="/images/showcase/puncture-repair.webp 1200w,
                                    /images/showcase/puncture-repair-500.webp 500w,
                                    /images/showcase/puncture-repair-300.webp 300w"
                            alt="Mobile tyre puncture repair"
                            sizes="(min-width: 1536px) 1280px, (min-width: 1280px) 1152px, (min-width: 1024px) 896px, 100vw"
                            class="object-cover object-center w-full h-full brightness-50"
                        >
                        <div class="absolute left-[15%] right-[15%] md:top-24 md:translate-y-0 top-1/2 -translate-y-1/2 pt-5 pb-5 text-white text-center">
                            <h1 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-1">30-60 Minute Response</h1>
                            <p class="sm:text-sm text-xs text-center">Maximum 30-60 minute response for emergencies.</p>
                        </div>
                    </CarouselSlide>
                </Carousel>
            </Container>
        </div>

        <Container>
            <MainCarouselSearchTyres />
        </Container>
    </div>
</template>

<script setup>
import { ref, watch } from "vue"
import Container from "../Shared/Container"
import Carousel from "../Shared/Carousel"
import CarouselSlide from "../Shared/CarouselSlide"
import MainCarouselSearchTyres from "../Shared/MainCarouselSearchTyres"

const isSliding = ref(false);
const visibleSlide = ref(0);
const direction = ref('left');
const slidesLen = 3;

const interval = 8;
const slideTimer = ref(interval);

watch(slideTimer, () => {
    if(slideTimer.value === 0) {
        slideTimer.value = interval;
        next();
    }else{
        setTimeout(() => {
            slideTimer.value--;
        }, 1000);
    }
}, { immediate: true })

function next() {
    if(isSliding.value) return;

    if(visibleSlide.value >= slidesLen - 1) {
        visibleSlide.value = 0;
    }else {
        visibleSlide.value += 1
    }
    direction.value = 'left';
    setSliding();
}
function prev() {
    if(isSliding.value) return;

    if(visibleSlide.value <= 0) {
        visibleSlide.value = slidesLen - 1;
    }else {
        visibleSlide.value--
    }
    direction.value = 'right';
    setSliding();
}

function setSliding() {
    isSliding.value = true;
    setTimeout(() => {
        isSliding.value = false;
    }, 600)
}

</script>

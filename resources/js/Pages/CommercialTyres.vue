<template>
    <Head>
        <title>Commercial Mobile Tyre Fitting for Vans in Beaconsfield - Available 24/7 | Mobile Tyres Beaconsfield</title>
        <meta name="description" content="With Mobile Tyres Beaconsfield's expert mobile tyre fitting service, you can keep your van running smoothly. We provide round-the-clock, quick, easy, and cost-effective mobile tyre fitting services.">
        <link rel="canonical" href="https://mobiletyres-beaconsfield.co.uk/commercial-tyres">
    </Head>

    <div class="bg-black">
        <Container class="relative lg:h-[340px] md:h-[250px] h-[200px]">
            <img
                src="/images/showcase/commercial-tyres.webp"
                srcset="/images/showcase/commercial-tyres.webp 1000w,
                                /images/showcase/commercial-tyres-500.webp 500w,
                                /images/showcase/commercial-tyres.webp 300w"
                class="object-cover object-center w-full h-full brightness-75"
                sizes="(min-width: 1536px) 1280px, (min-width: 1280px) 1152px, (min-width: 1024px) 896px, (min-width: 768px) 752px, (min-width: 576px) 560px, 100vw"
                alt="Mobile Tyre Fitting"
            >
            <div class="absolute left-[15%] right-[15%] lg:top-28 lg:translate-y-0 top-1/2 -translate-y-1/2 pt-5 pb-5 text-white text-center">
                <h1 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-1">Commercial Tyres</h1>
                <p class="sm:text-sm text-xs text-center">Same day service for emergencies & non-emergencies</p>
            </div>
        </Container>
    </div>

    <SearchTyres></SearchTyres>

    <Container>
        <Content>
            <div class="xl:px-11 sm:px-8 px-4">
                <h1 class="font-montserrat font-bold md:text-3xl sm:text-2xl text-xl mb-2 uppercase">Commercial Mobile Tyre Fitting</h1>
                <h2 class="md:text-xl sm:text-lg text-base mb-10">Commercial tyre fitting that comes to you!</h2>

                <div class="lg:grid grid-cols-12 gap-y-12 lg:gap-x-4 lg:space-y-0 space-y-12 lg:mt-8 mt-4">
                    <div class="col-span-12">
                        <p class="text-sm">
                            Why not take advantage of our convenient commercial mobile tyre fitting service?
                        </p>
                        <br>
                        <p class="text-sm">
                            Mobile Tyres Beaconsfield offers commercial mobile tyre fitting service.
                            Our expert technicians can come to your location and replace the tyres on your vans, buses, or trucks.
                            There is no need to bring your vehicles to a tyre shop with our convenient mobile service.
                            We are fully equipped to handle the larger, specialised tyres used on commercial vehicles and can provide high-quality tyre service on-site.
                            Properly maintained tyres are critical for your company's safety and efficiency,
                            and Mobile Tyres Beaconsfield is here to help you keep your commercial vehicles running smoothly.
                        </p>
                        <br>
                        <p class="text-sm flex items-center">
<!--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">-->
<!--                                <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />-->
<!--                                <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />-->
<!--                            </svg>-->
<!--                            <span>Need mobile tyre services ASAP?, please call us on <a class="text-blue-600 underline" href="tel:07989606060">07989 606060</a> for a prompt service</span>-->
                        </p>
                    </div>
                </div>
            </div>
        </Content>
    </Container>

    <Container>
        <OurServices />
        <AreasWeCover :areas="$page.props.areas" />
        <PopularTyreBrands />
        <CustomerRating class="px-3 pt-12"/>
    </Container>
</template>


<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Container from "../Shared/Container";
import CustomerRating from "../Shared/CustomerRating";
import PopularTyreBrands from "../Shared/PopularTyreBrands";
import AreasWeCover from "../Shared/AreasWeCover";
import OurServices from "../Shared/OurServices";
import SearchTyres from "../Shared/SearchTyres";
import Content from "../Shared/Content";

</script>

<style scoped>

</style>

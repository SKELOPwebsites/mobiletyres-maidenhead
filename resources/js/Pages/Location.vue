<template>
    <Head>
        <title>Mobile Tyre Fitting & Repair in {{ location }} | Mobile Tyres Beaconsfield</title>
        <meta name="description" :content="`If you're looking for mobile tyre fitting around ${location}, look no further. Mobile Tyres Beaconsfield provides high quality tyres seven days a week!`">
        <link rel="canonical" :href="'https://mobiletyres-beaconsfield.co.uk/locations/' + slug">
    </Head>

    <LocationCarousel :location="location" />

    <Container>
        <OurServices />
        <AreasWeCover :areas="$page.props.areas" />
        <PopularTyreBrands />
        <CustomerRating class="px-3 pt-12"/>
    </Container>

    <Container>

        <Content>
            <div class="xl:px-11 sm:px-8 px-4">
                <h1 class="font-montserrat font-bold md:text-3xl sm:text-2xl text-xl mb-2 uppercase">Mobile Tyre Fitting & Services in {{ location }}</h1>
                <h2 class="md:text-xl sm:text-lg text-base mb-10">The mobile solution for your tyre needs.</h2>
                <p class="text-sm">
                    <b>Mobile Tyres Beaconsfield</b> is a leading provider of mobile tyre fitting services in the United Kingdom.
                    Based in Beaconsfield, we serve the surrounding areas, bringing our expertise and high-quality tyres directly to our customers.
                    Our team of trained professionals is equipped to handle the tyre fitting needs of all types of vehicles, from cars and vans to commercial vehicles.
                </p>
                <br>
                <p class="text-sm">
                    We offer a convenient and cost-effective solution, saving our customers the time and hassle of having to take their vehicle to a tyre shop.
                    Plus, our prices are competitive and we have a wide selection of tyre brands to choose from. And with our 24/7 availability,
                    you can count on us to be there for you whenever you need new tyres. If you're in the Beaconsfield area and in need of tyre fitting services,
                    be sure to choose <b>Mobile Tyres Beaconsfield</b>.
                </p>
                <br>
                <div class="md:grid grid-cols-12 gap-y-12 lg:gap-x-4 md:gap-x-8 md:space-y-0 space-y-12 md:mt-8 mt-4">
                    <div class="col-span-12 lg:p-4">
                        <h2 class="lg:text-3xl text-2xl font-semibold">24 Hour Mobile Tyre Fitting in {{ location }}</h2>
                        <br>
                        <p class="text-sm">
                            At <b>Mobile Tyres Beaconsfield</b>, we offer our customers 24 hour mobile tyre fitting service. When you're in need of an emergency tyre repair or change,
                            we have you covered. We know that you don't choose the day or time of your next tyre service needs, that's why we offer our service 24 hours.
                            We want to make sure that you have access to emergency mobile tyre fitting help when you need it.
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
                    <div class="col-span-12 lg:p-4">
                        <h2 class="lg:text-3xl text-2xl font-semibold">Mobile Tyre Repair - Your Mobile Tyre Fitters in {{ location }}</h2>
                        <br>
                        <p class="text-sm">
                            Mobile tyre fitting is a convenient and cost-effective solution for businesses and individuals alike. By providing this service,
                            we can save our customers the time and hassle of having to take their vehicle to a tyre shop. Our team of trained professionals
                            will come to your location, at a time that is convenient for you, to expertly fit your new tyres. This not only saves you time,
                            but also ensures that your tyres are fitted properly, improving the safety and performance of your vehicle. Plus, our mobile tyre
                            fitting service is competitively priced, offering you great value for money.
                        </p>
                        <br>
                        <p class="text-sm">
                            During normal hours, we can send hour day mobile tyre team to come help you out. Don't worry,
                            we also have a night team on standby every night, as well as on holidays.
                            We know that your mobile tyre repair needs don't take holidays, so we don't either!
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
                    <div class="col-span-12 lg:p-4">
                        <h2 class="lg:text-3xl text-2xl font-semibold mb-2">Night and Day Mobile Tyre Services in {{ location }}</h2>
                        <h2 class="text-xl">We can meet you anywhere, anytime</h2>
                        <br>
                        <p class="text-sm">
                            At <b>Mobile Tyres Beaconsfield</b>, we understand that tyre issues can happen at any time, which is why we offer a 24/7 mobile tyre fitting service.
                            Our team of trained professionals is available around the clock to provide expert tyre fitting at a time that is convenient for you.
                            We understand that your time is valuable, so we work quickly and efficiently to get your tyres fitted and your vehicle back on the road.
                            Plus, our mobile tyre fitting service means that you don't have to waste time and money on towing your vehicle to a tyre shop.
                            Instead, we come to you, saving you time and hassle. So, if you need new tyres at any time of the day or night,
                            be sure to choose <b>Mobile Tyres Beaconsfield</b>.
                        </p>
                        <br>
                        <p class="text-sm">Whether you're stuck on the roadside or motorway, day or night, high or low, just call us! We can assist large size vehicles, medium size vehicles and small size vehicles.  If you're deserted on the side of the road, our team will search for you to help provide you with great services day or night.</p>
                        <br>
                        <p class="text-sm flex items-center">
                            <!--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">-->
                            <!--                                <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />-->
                            <!--                                <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />-->
                            <!--                            </svg>-->
                            <!--                            <span>Need mobile tyre services ASAP?, please call us on <a class="text-blue-600 underline" href="tel:07989606060">07989 606060</a> for a prompt service</span>-->
                        </p>
                    </div>
                    <div class="col-span-12 lg:p-4">
                        <h2 class="lg:text-3xl text-2xl font-semibold">Commercial Tyre Fitting in {{ location }}</h2>
                        <br>
                        <p class="text-sm">
                            Yes, you heard right! Alongside your normal passenger tyres, we also provide tyre services for commercial vehicles, such as mini-vans, vans, minibus.
                            We provide mobile tyre fitting to all van sizes, from SWB vans all the way to LWB vans.
                            We fit commercial tyres during day & night, 7 days a week, so the next time your commercial tyre has a blowout, call us for a quick and easy solution!
                        </p>
                        <br>
                        <p class="text-sm">
                            If you're a business owner, mobile tyre fitting can help you save time and money on maintaining your company's fleet of vehicles.
                            Instead of having to take each vehicle to a tyre shop, our team can come to your location and quickly and efficiently fit new tyres.
                            This not only saves you time, but also reduces the downtime of your vehicles, allowing them to get back on the road faster.
                            Plus, our mobile tyre fitting service is affordable and reliable, ensuring that your vehicles are always safe and ready to hit the road.
                            By choosing our service, you can improve the efficiency and cost-effectiveness of your fleet.
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
                    <div class="col-span-6 lg:p-4">
                        <h3 class="lg:text-3xl text-2xl">Why choose Mobile Tyres Beaconsfield?</h3>
                        <br>
                        <p class="text-sm">
                            If you're in the {{ location }} area and in need of new tyres, <b>Mobile Tyres Beaconsfield</b> should be your first choice.
                            We offer a convenient and cost-effective mobile tyre fitting service, bringing our expertise and high-quality tyres to your location.
                        </p>
                        <br>
                        <p class="text-sm">
                            Our team of trained professionals will ensure that your new tyres are fitted properly, improving the safety and performance of your vehicle.
                            Plus, our prices are competitive, offering great value for money. We also have a wide selection of tyre brands to choose from,
                            ensuring that you can find the right tyres for your vehicle and driving needs. So, why choose anyone else?
                            Choose <b>Mobile Tyres Beaconsfield</b> for all your tyre needs.
                        </p>

                    </div>
                    <div class="col-span-6 lg:p-4">
                        <h3 class="lg:text-3xl text-2xl">Tyre brands we supply</h3>
                        <br>
                        <p class="text-sm">
                            At <b>Mobile Tyres Beaconsfield</b>, we pride ourselves on offering a wide selection of high-quality tyre brands to meet the needs of our customers.
                            Whether you're looking for budget-friendly options or top-of-the-line performance tyres, we have something for everyone.
                        </p>
                        <br>
                        <p class="text-sm">
                            Some of the brands we offer include Bridgestone, Michelin, Goodyear, and Pirelli. These brands are known for their durability,
                            reliability, and performance, making them a great choice for any vehicle. In addition to these well-known brands,
                            we also offer a range of other tyre brands to suit different budgets and driving needs. So, if you're in need of new tyres,
                            be sure to check out our selection.
                        </p>
                    </div>
                </div>
            </div>
        </Content>
    </Container>
</template>


<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import LocationCarousel from "../Shared/LocationCarousel";
import Container from "../Shared/Container";
import CustomerRating from "../Shared/CustomerRating";
import PopularTyreBrands from "../Shared/PopularTyreBrands";
import AreasWeCover from "../Shared/AreasWeCover";
import OurServices from "../Shared/OurServices";
import Content from "../Shared/Content";

defineProps({
    location: String,
    slug: String,
})
</script>

<style scoped>

</style>

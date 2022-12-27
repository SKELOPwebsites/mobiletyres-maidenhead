<template>
    <header class="bg-white">
        <Header />
        <Navbar />
    </header>

    <slot />

    <Footer />

</template>

<script setup>
import Header from "./Header"
import Navbar from "./Navbar"
import Footer from "./Footer"

</script>

<style scoped>

</style>

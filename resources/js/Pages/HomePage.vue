<template>
  <div>
    <Header />
    <HeroSection />
    <TrustedPage />
    <HowItWorks />
    <Benefits />
    <AmbassadorPage />
    <Footer />


    <main>
      <slot></slot>
    </main>
  </div>
</template>

<script>
import AmbassadorPage from './HomePageComponents/AmbassadorPage.vue';
import Benefits from './HomePageComponents/Benefits.vue';
import Footer from './HomePageComponents/Footer.vue';
import Header from './HomePageComponents/Header.vue';
import HeroSection from './HomePageComponents/HeroPage.vue';
import HowItWorks from './HomePageComponents/HowItWorks.vue';
import TrustedPage from './HomePageComponents/TrustedPage.vue';

export default {
  components: {
    Header,
    HeroSection,
    TrustedPage,
    HowItWorks,
    Benefits,
    AmbassadorPage,
    Footer
  }
}
</script>

<style>
</style>

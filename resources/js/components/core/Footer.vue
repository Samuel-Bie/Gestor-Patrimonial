<template>
  <v-footer
    id="core-footer"
    absolute
    height="82"
  >
    <div class="footer-items">
      <span
        v-for="link in links"
        :key="link.name"
      >
        <a
          :href="link.Link"
          class="tertiary--text footer-links">{{ link.name }}</a>
      </span>
    </div>
    <v-spacer/>
    <span class="font-weight-light copyright">
      &copy;
      {{ (new Date()).getFullYear() }}
      <a
        href="https://unizambeze.ac.mz/"
        target="_blank">Universidade Zambeze
      </a>,
    </span>
  </v-footer>
</template>

<script>
export default {
  data: () => ({
    links: [
      { name: 'Home', Link: '/dashboard' },
      { name: 'Sobre o sistema', Link: 'https://example.com' },
      { name: 'Samuel Bie', Link: 'https://samuel-bie.github.io' },
    ]
  })
}
</script>

<style>
#core-footer {
  z-index: 0;
}
</style>

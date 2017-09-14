<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <div>
      <h2>Wordpress Posts</h2>
      <div v-for="post in posts">
        <h3>{{ post.title.rendered }}</h3>
        <div v-html="post.content.rendered"></div>
      </div>
    </div>
  </div>
</template>

<script>
import types from '../store/types';

export default {
  name: 'hello',
  data() {
    return {
      msg: 'Welcome to Your Vue.js Wordpress App',
    };
  },
  computed: {
    posts() {
      return this.$store.state.posts;
    },
  },
  mounted() {
    this.$store.dispatch(types.GET_POSTS);
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>

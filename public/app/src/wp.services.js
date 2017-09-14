import axios from 'axios';

const WP_API_URL = 'http://wp.dev/wp-json';

export default {
  getAllPosts() {
    return axios.get(`${WP_API_URL}/wp/v2/posts/`);
  },
};

import service from '../wp.services';
import types from './types';

export default {
  async [types.GET_POSTS](context) {
    const posts = await service.getAllPosts();
    context.commit(types.SET_POSTS, posts);
  },
};

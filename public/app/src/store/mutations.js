import types from './types';

export default {
  [types.SET_POSTS](state, { data }) {
    state.posts = data;
  },
};

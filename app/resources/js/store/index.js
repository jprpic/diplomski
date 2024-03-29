import Vuex from 'vuex'
import actions from './actions'
import mutations from './mutations';
import getters from './getters';

const store = new Vuex.Store({
    state () {
        return {
            user: null,
            cv: null,
            search : null,
            jobAd : null,
            orgCv: null
        }
    },
    getters: getters,
    mutations: mutations,
    actions: actions
})

export default store;

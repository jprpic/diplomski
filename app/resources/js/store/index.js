import Vuex from 'vuex'
import actions from './actions'
import mutations from './mutations';
import getters from './getters';

const store = new Vuex.Store({
    state () {
        return {
            cv:{
                name: '',
                description: '',
                address: '',
                email: '',
                contacts: [{
                    type: '',
                    url: ''
                }],
                job: '',
                experiences: [{
                    name: '',
                    source: '',
                    type: '',
                    results: [''],
                    started_at: {
                        month: null,
                        year: null
                    },
                    finished_at: {
                        month: null,
                        year: null
                    }
                }],
                skills:[{
                    type: '',
                    name: '',
                    level: ''
                }],
                references: '',
            }
        }
    },
    getters: getters,
    mutations: mutations,
    actions: actions
})

export default store;

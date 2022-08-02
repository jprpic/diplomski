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
                    id: '',
                    value: ''
                }],
                job: '',
                experiences: [{
                    name: '',
                    source: '',
                    type: '',
                    results: [''],
                    started_at: null,
                    finished_at: null
                }],
                skills:[{
                    id: '',
                    proficiency: ''
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

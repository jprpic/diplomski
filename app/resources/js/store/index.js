import Vuex from 'vuex'
import actions from './actions'
import mutations from './mutations';
import getters from './getters';

const store = new Vuex.Store({
    state () {
        return {
            user: null,
            cv:{
                name: '',
                sex: '',
                birthdate: '',
                description: '',
                address: {
                    street: '',
                    postcode: ''
                },
                contacts: [{
                    contact_id: '',
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
                    skill_id: '',
                    proficiency: ''
                }],
                references: '',
            },
            search : {
                ageBot: 0,
                ageTop: 100,
                skills: [],
                city: ''
            }
        }
    },
    getters: getters,
    mutations: mutations,
    actions: actions
})

export default store;

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
                birthdate: null,
                years_of_exp: '',
                description: '',
                street: '',
                postcode: '',
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
                ageRange:{
                    bot: 20,
                    top: 40
                },
                expRange: {
                    bot: 0,
                    top: 3
                },
                skills: [],
                county: null,
                city: null
            }
        }
    },
    getters: getters,
    mutations: mutations,
    actions: actions
})

export default store;

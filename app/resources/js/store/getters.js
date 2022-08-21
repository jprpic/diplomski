const getters = {
    cv(state){
        return state.cv;
    },
    availableSkills(state){
        return state.available_skills;
    },
    availableContacts(state){
        return state.available_contacts;
    },
    user(state){
        return state.user;
    },
    search(state){
        return state.search;
    },
    job(state){
        return state.job;
    },
    orgCv(state){
        return state.orgCv;
    }
}

export default getters;

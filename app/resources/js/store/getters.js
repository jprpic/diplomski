const getters = {
    cv(state) {
        return state.cv;
    },
    availableSkills(state) {
        return state.available_skills;
    },
    availableContacts(state) {
        return state.available_contacts;
    },
    user(state) {
        return state.user;
    },
    search(state) {
        return state.search;
    },
    jobAd(state) {
        return state.jobAd;
    },
    orgCv(state) {
        return state.orgCv;
    },
    editUser(state) {
        return state.editUser;
    },
};

export default getters;

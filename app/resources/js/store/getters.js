const getters = {
    name(state){
        return state.cv.name;
    },
    cv(state){
        return state.cv;
    },
    experiences(state) {
        return state.cv.experiences;
    },
    getContactByID: (state) => (id) => {
        return state.cv.contacts.find(contact => contact.id === id)
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
    }
}

export default getters;

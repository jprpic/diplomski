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
    }
}

export default getters;
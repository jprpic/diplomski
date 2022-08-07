const actions = {
    updateName(context, name){
        context.commit('updateName', name);
    },
    updateDescription(context, description){
        context.commit('updateDescription', description);
    },
    updateAddressStreet(context, street){
        context.commit('updateAddressStreet', street);
    },
    updatePostcode(context, code){
        context.commit('updatePostcode', code);
    },
    updateEmail(context, email){
        context.commit('updateEmail', email);
    },
    updateJob(context, job){
        context.commit('updateJob', job);
    },
    updateReferences(context, references){
        context.commit('updateReferences', references);
    },
    addContact(context){
      context.commit('addContact');
    },
    updateContact(context, contact){
        context.commit('updateContact', contact);
    },
    removeContact(context, index){
        context.commit('removeContact', index);
    },
    addExperience(context){
        context.commit('addExperience')
    },
    updateExperience(context, experience){
        context.commit('updateExperience', experience);
    },
    removeExperience(context, index){
        context.commit('removeExperience', index);
    },
    addSkill(context){
        context.commit('addSkill');
    },
    updateSkill(context, skill){
        context.commit('updateSkill', skill);
    },
    removeSkill(context, index){
        context.commit('removeSkill', index);
    },
    setAvailableSkills(context, skills){
        context.commit('setAvailableSkills', skills);
    },
    setAvailableContacts(context, contacts){
        context.commit('setAvailableContacts', contacts);
    },
    setCV(context, cv){
        context.commit('setCV', cv);
    },
    removeCV(context){
        context.commit('removeCV')
    },
    setUser(context, user){
        context.commit('setUser', user);
    },
    addSearchSkill(context, skill){
        context.commit('addSearchSkill', skill)
    },
    restartSearch(context) {
        context.commit('restartSearch');
    },
    removeSearchSkill(context, index){
        context.commit('removeSearchSkill', index);
    },

}

export default actions;

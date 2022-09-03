const actions = {
    updateName(context, name){
        context.commit('updateName', name);
    },
    updateImgUrl(context, url) {
        context.commit('updateImgUrl', url);
    },
    updateDescription(context, description){
        context.commit('updateDescription', description);
    },
    updateAddressStreet(context, street){
        context.commit('updateAddressStreet', street);
    },
    updateBirthdate(context, date){
        context.commit('updateBirthdate', date);
    },
    updateYearsOfExp(context, value){
        context.commit('updateYearsOfExp', value);
    },
    updatePostcode(context, code){
        context.commit('updatePostcode', code);
    },
    updateSex(context, sex){
        context.commit('updateSex', sex)
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
    refreshCV(context){
        context.commit('refreshCV')
    },
    setUser(context, user){
        context.commit('setUser', user);
    },
    addSearchSkill(context, skill){
        context.commit('addSearchSkill', skill)
    },
    refreshSearch(context) {
        context.commit('refreshSearch');
    },
    setSearch(context, search){
        context.commit('setSearch', search)
    },
    removeSearchSkill(context, index){
        context.commit('removeSearchSkill', index);
    },
    updateMinAge(context, minAge){
        context.commit('updateMinAge', minAge)
    },
    updateMaxAge(context, maxAge){
        context.commit('updateMaxAge', maxAge);
    },
    updateMinExp(context, minExp){
        context.commit('updateMinExp', minExp)
    },
    updateMaxExp(context, maxExp){
        context.commit('updateMaxExp', maxExp);
    },
    updateSearchCounty(context, county){
        context.commit('updateSearchCounty', county);
    },
    updateSearchCity(context, city){
        context.commit('updateSearchCity', city)
    },
    addJobSkill(context, skill){
        context.commit('addJobSkill', skill)
    },
    refreshJobAd(context) {
        context.commit('refreshJobAd');
    },
    setJobAd(context, search){
        context.commit('setJobAd', search)
    },
    removeJobSkill(context, index){
        context.commit('removeJobSkill', index);
    },
    updateJobMinAge(context, minAge){
        context.commit('updateJobMinAge', minAge)
    },
    updateJobMaxAge(context, maxAge){
        context.commit('updateJobMaxAge', maxAge);
    },
    updateJobMinExp(context, minExp){
        context.commit('updateJobMinExp', minExp)
    },
    updateJobMaxExp(context, maxExp){
        context.commit('updateJobMaxExp', maxExp);
    },
    updateJobCounty(context, county){
        context.commit('updateJobCounty', county);
    },
    updateJobCity(context, city){
        context.commit('updateJobCity', city)
    },
    updateJobName(context, name){
        context.commit('updateJobName', name);
    },
    updateJobDescription(context, description){
        context.commit('updateJobDescription', description);
    },
    addJobResponsibility(context, responsibility){
        context.commit('addJobResponsibility', responsibility);
    },
    removeJobResponsibility(context, index){
        context.commit('removeJobResponsibility', index);
    },
    updateJobResponsibility(context, responsibility){
        context.commit('updateJobResponsibility', responsibility);
    },
    refreshOrgCV(context){
        context.commit('refreshOrgCV');
    },
    updateOrgName(context, name){
        context.commit('updateOrgName', name);
    },
    updateOrgEmail(context, email){
        context.commit('updateOrgEmail', email);
    },
    updateOrgDescription(context, description){
        context.commit('updateOrgDescription', description);
    },
    updateOrgImgUrl(context, img_url){
        context.commit('updateOrgImgUrl', img_url);
    },
    updateOrgPostcode(context, postcode) {
        context.commit('updateOrgPostcode', postcode);
    },
    updateOrgStreet(context, street){
        context.commit('updateOrgStreet', street);
    },
    setOrgCv(context, cv){
        context.commit('setOrgCv', cv);
    },
    addOrgContact(context){
        context.commit('addOrgContact');
    },
    updateOrgContact(context, contact){
        context.commit('updateOrgContact', contact);
    },
    removeOrgContact(context, index){
        context.commit('removeOrgContact', index);
    },


}

export default actions;

const mutations = {
    updateName(state, name){
        state.cv.name = name;
    },
    updateImgUrl(state, url){
        state.cv.img_url = url;
    },
    updateDescription(state, description){
        state.cv.description = description;
    },
    updateAddressStreet(state, street){
        state.cv.street = street;
    },
    updatePostcode(state, code){
        state.cv.postcode = code;
    },
    updateBirthdate(state, date){
        state.cv.birthdate = date;
    },
    updateYearsOfExp(state, value){
        state.cv.years_of_exp = value;
    },
    updateSex(state, sex){
        state.cv.sex = sex;
    },
    updateJob(state, job){
        state.cv.job = job;
    },
    updateReferences(state, references){
        state.cv.references = references;
    },
    addContact(state){
        state.cv.contacts.push({
            contact_id: '',
            value: ''
        })
    },
    updateContact(state, contact){
        const index = contact.index;
        delete contact.index;
        state.cv.contacts[index] = contact;
    },
    removeContact(state, index){
        state.cv.contacts.splice(index, 1); // 2nd parameter means remove one item only
    },
    addExperience(state){
        state.cv.experiences.push({
            name: '',
            source: '',
            type: '',
            results: [''],
            started_at: null,
            finished_at: null
        })
    },
    updateExperience(state, experience){
        const index = experience.index;
        delete experience.index;
        state.cv.experiences[index] = experience;
    },
    removeExperience(state, index){
        state.cv.experiences.splice(index, 1); // 2nd parameter means remove one item only
    },
    addSkill(state){
        state.cv.skills.push({
            skill_id: '',
            proficiency: ''
        })
    },
    updateSkill(state, skill){
        const index = skill.index;
        delete skill.index;
        state.cv.skills[index] = skill;
    },
    removeSkill(state, skill_id){
        state.cv.skills = state.cv.skills.filter(skill => skill.skill_id !== skill_id);
    },
    setAvailableSkills(state, skills){
        if(state.available_skills === undefined) {
            state.available_skills = skills;
        }
    },
    setAvailableContacts(state, contacts){
        if(state.available_contacts === undefined){
            state.available_contacts = contacts;
        }
    },
    setCV(state, cv){
        state.cv = cv;
    },
    refreshCV(state){
        state.cv = {
            name: '',
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
        }
    },
    setUser(state, user){
        state.user = user;
    },
    refreshSearch(state){
        state.search = {
            minAge: 20,
            maxAge: 50,
            minExp: 0,
            maxExp: 5,
            skills: [],
        }
    },
    setSearch(state, search){
        state.search = search;
    },
    addSearchSkill(state, skill) {
        state.search.skills.push(skill);
    },
    removeSearchSkill(state, skill_id){
        state.search.skills = state.search.skills.filter(id => id !== skill_id);
    },
    updateMinAge(state, minAge){
        state.search.minAge = minAge;
    },
    updateMaxAge(state, maxAge){
        state.search.maxAge = maxAge;
    },
    updateMinExp(state, minExp){
        state.search.minExp = minExp;
    },
    updateMaxExp(state, maxExp){
        state.search.maxExp = maxExp;
    },
    updateSearchCounty(state, county){
        state.search.county = county;
    },
    updateSearchCity(state, city){
        state.search.city = city;
    },
    updateJobMinAge(state, minAge){
        state.jobAd.minAge = minAge;
    },
    updateJobMaxAge(state, maxAge){
        state.jobAd.maxAge = maxAge;
    },
    updateJobMinExp(state, minExp){
        state.jobAd.minExp = minExp;
    },
    updateJobMaxExp(state, maxExp){
        state.jobAd.maxExp = maxExp;
    },
    updateJobCounty(state, county){
        state.jobAd.county = county;
    },
    updateJobCity(state, city){
        state.jobAd.city = city;
    },
    updateJobDescription(state, description){
        state.jobAd.description = description;
    },
    addJobResponsibility(state, responsibility){
      state.jobAd.responsibilities.push(responsibility);
    },
    removeJobResponsibility(state, index){
        state.jobAd.responsibilities.splice(index, 1);
    },
    updateJobResponsibility(state, responsibility){
        state.jobAd.responsibilities[responsibility.index] = responsibility.value;
    },
    refreshJobAd(state){
        state.jobAd = {
            name: '',
            description: '',
            minAge: 20,
            maxAge: 50,
            minExp: 0,
            maxExp: 5,
            skills: [],
            responsibilities: [''],
        }
    },
    setJobAd(state, search){
        state.jobAd = search;
    },
    addJobSkill(state, skill) {
        state.jobAd.skills.push(skill);
    },
    removeJobSkill(state, skill_id){
        state.jobAd.skills = state.jobAd.skills.filter(id => id !== skill_id);
    },
    updateJobName(state, name){
        state.jobAd.name = name;
    },
    refreshOrgCV(state){
        state.orgCv = {
            name: '',
            contacts: [{
                contact_id: '',
                value: ''
            }],
            description: '',
            img_url: '',
            postcode: '',
            street: ''
        }
    },
    updateOrgName(state, name){
        state.orgCv.name = name;
    },
    updateOrgEmail(state, email){
        state.orgCv.email = email;
    },
    updateOrgDescription(state, description){
        state.orgCv.description = description;
    },
    updateOrgImgUrl(state, img_url){
        state.orgCv.img_url = img_url;
    },
    updateOrgPostcode(state, postcode) {
        state.orgCv.postcode = postcode;
    },
    updateOrgStreet(state, street){
        state.orgCv.street = street;
    },
    setOrgCv(state, orgCv){
        state.orgCv = orgCv;
    },
    addOrgContact(state){
        state.orgCv.contacts.push({
            contact_id: '',
            value: ''
        })
    },
    updateOrgContact(state, contact){
        const index = contact.index;
        delete contact.index;
        state.orgCv.contacts[index] = contact;
    },
    removeOrgContact(state, index){
        state.orgCv.contacts.splice(index, 1); // 2nd parameter means remove one item only
    },
}

export default mutations;

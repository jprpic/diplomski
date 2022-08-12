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
    removeSkill(state, index){
        state.cv.skills.splice(index, 1); // 2nd parameter means remove one item only
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
    removeCV(state){
        state.cv = {
            name: '',
            description: '',
            address: {
                street: '',
                postcode: ''
            },
            email: '',
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
    restartSearch(state){
        state.search = {
            ageRange:{
                bot: 20,
                top: 40
            },
            expRange: {
                bot: 0,
                top: 3
            },
            skills: [],
        }
    },
    setSearch(state, search){
        state.search = search;
    },
    addSearchSkill(state, skill) {
        state.search.skills.push(skill);
    },
    removeSearchSkill(state, index){
        state.search.skills.splice(index, 1); // 2nd parameter means remove one item only
    },
    updateAgeRange(state, ageRange){
        state.search.ageRange = ageRange;
    },
    updateExpRange(state, expRange){
        state.search.expRange = expRange;
    },
    updateSearchCounty(state, county){
    state.search.county = county;
    },
    updateSearchCity(state, city){
        state.search.city = city;
    },
}

export default mutations;

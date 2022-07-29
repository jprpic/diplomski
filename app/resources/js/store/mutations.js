const mutations = {
    updateName(state, name){
        state.cv.name = name;
    },
    updateDescription(state, description){
        state.cv.description = description;
    },
    updateAddress(state, address){
        state.cv.address = address;
    },
    updateEmail(state, email){
        state.cv.email = email;
    },
    updateJob(state, job){
        state.cv.job = job;
    },
    updateReferences(state, references){
        state.cv.references = references;
    },
    addContact(state){
        state.cv.contacts.push({
            type: '',
            url: ''
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
            started_at: {
                month: null,
                year: null
            },
            finished_at: {
                month: null,
                year: null
            }
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
            type: '',
            name: '',
            level: ''
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
        if(state.available_skills === undefined){
            state.available_skills = skills;
        }
    }
}

export default mutations;

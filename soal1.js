var myBiodata = ()  => {
    var data = {

        
        nama : "razki",
        age : "17",
        addres : [
            { Kota :"Tanggerang",
              alamat: "jln. Cendana V Blok c1 no 21",
            }
        ],
        hobbies: ['parkour', 'gaming', 'playing piano', 'music'],
        is_married: false,
        
        list_school : [
            {
                name : 'Smk Telkom Jakarta',
                year_in : 2017,
                year_out : 2020,
                major : 'Rekayasa Perangkat Lunak'
            },
            
            {
                name : 'Mts Asy Syukriah',
                year_in : 2014,
                year_out : 2017,
                major : null
            },
        ],
        Skills : [
            {
                skill_name : 'Parkour',
                level : 'expert'
            },
            
            {
                skill_name : 'English',
                level : 'Medium'
            },
            
            {
                skill_name : 'Playing Piano',
                level : 'Ameteur'
            },
            
            {
                skill_name : 'Adobe Photoshop',
                level : 'Advanced'
            },
            
            {
                skill_name : 'HTML',
                level : 'Advanced'
            },
            
            {
                skill_name : 'Javascript',
                level : 'amateur'
            },
            
            {
                skill_name : 'Sony Vegas Pro',
                level : 'Amateur'
            },
            
            {
                skill_name : 'CSS',
                level : 'amateur'
            },
            
            {
                skill_name : 'Python',
                level : 'beginner'
            },
            
            {
                skill_name : 'C++',
                level : 'amateur'
            },
            
            {
                skill_name : 'MySQL',
                level : 'beginner'
            },
            
            
        ],
        "interest_in_coding" : true
        
    }
    result = JSON.stringify(data);
    return result;
};
console.log(myBiodata());
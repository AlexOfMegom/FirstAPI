async function getVelue(){
    let url = 'http://pdo:8081/API_Restful/api/client/1';
    let response = await fetch(url);
    
    let commits = await response.json(); // читаем ответ в формате JSON
    
    console.log(commits);
    }
    getVelue();
    
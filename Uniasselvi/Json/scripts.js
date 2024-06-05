const objs = [
    {
        alunos: [
            {
                codigo: 9999,
                nome: 'Marcio',
                nascimento: '12/12/1990',
                disciplinas_cursadas: [
                    'Projeto Orientação a Objetos',
                    'Programação Web I'
                ]
            }
        ]
    }
]

const jsonData = JSON.stringify(objs)

console.log(jsonData)
console.log(typeof jsonData)

const objData = JSON.parse(jsonData);

console.log(objData)


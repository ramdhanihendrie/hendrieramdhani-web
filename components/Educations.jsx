import React from 'react'

const Educations = () => {
  const educations = [
    {title: "Fresh Graduate Academy by Digitalent KOMINFO", desc: "Path Front End Developer and Path React JS For Web Development" },
    {title: "Universitas Islam Negeri Syarif Hidayatullah Jakarta", desc: "Majoring Informatics Engineering" },
  ]
  return (
    <section>
      <h3 className="text-primary font-semibold text-2xl mt-20">Education:</h3>
      <p className="text-justify tracking-wide leading-7 mt-3">I have taken formal education at university and in training, here are some of the educations that I have taken.</p>
      {
        educations.map((edu) => {
          return (
            <div key={edu.title}>
              <li className="font-bold text-xl mt-3">{edu.title}</li>
              <p className="ml-7 leading-loose">{edu.desc}</p>
            </div>
          )
        })
      }
    </section>
  )
}

export default Educations
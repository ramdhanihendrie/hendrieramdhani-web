import React from 'react'

const Certificates = () => {
  const certs = [
    {id: "1", name: "React JS for Web Development"},
    {id: "2", name: "Front End Developer"},
    {id: "3", name: "The Complete Front End Web Development"},
    {id: "4", name: "Belajar Dasar Pemrograman Web"},
    {id: "5", name: "Web Development Course NodeJS"},
    {id: "6", name: "React"},
  ]
  return (
    <section>
      <h3 className="text-primary font-semibold text-2xl mt-20">Certificates:</h3>
      <p className="text-justify tracking-wide leading-7 mt-3">I have learned several skills through courses and certifications, here are some of the skill certificates I have.</p>
      <div class="columns-1 md:columns-2 gap-0 xl:px-40">
        {
          certs.map((certs) => {
            return (
              <div key={certs.id} className="break-inside-avoid p-5">
                <img 
                  src={"/certificates/" + certs.name + ".jpg"} 
                  alt={certs.name} 
                  loading="lazy"
                />
              </div>
            )
          })
        }
      </div>
    </section>
  )
}

export default Certificates
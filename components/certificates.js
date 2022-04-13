import React from 'react'
import Image from 'next/image'

const certificates = () => {
  const certs = [
    {id: "1", name: "The Complete Front End Web Development"},
    {id: "2", name: "Belajar Dasar Pemrograman Web"},
    {id: "3", name: "Web Development Course NodeJS"},
    {id: "4", name: "React"},
    {id: "5", name: "HTML&CSS"},
    {id: "6", name: "Javascript"},
    {id: "7", name: "jQuery"},
    {id: "8", name: "Sass"},
    {id: "9", name: "Command Line"},
    {id: "10", name: "Git"},
  ]
  return (
    <section>
      <h3 className="text-primary font-semibold text-2xl mt-20">Certificates:</h3>
      <p className="text-justify tracking-wide leading-7 mt-3">I have learned several skills through courses and certifications, here are some of the skill certificates I have.</p>
      <div className="grid grid-cols-1 sm:grid-cols-2 overflow-hidden gap-3 w-3/4 mx-auto my-5">
        {
          certs.map((certs) => {
            return (
              <div key={certs.id} className="h-fit">
                <Image 
                  src={"/certificates/" + certs.name + ".jpg"} 
                  alt={certs.name} 
                  layout="responsive" 
                  objectFit="contain" 
                  height="100%" 
                  width="100%"
                />
              </div>
            )
          })
        }
      </div>
    </section>
  )
}

export default certificates
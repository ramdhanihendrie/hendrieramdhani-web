import React from 'react'
import Techs from './techs'
import Educations from './educations'
import Certificates from './certificates'

const about = () => {
  return (
    <section id="about" className="container mx-auto pt-20 py-5">
      <h3 className="text-primary font-semibold text-2xl">About me:</h3>
      <p className="text-justify tracking-wide leading-7 mt-3">Hi, my name is Hendrie Ramdhani, i am a Web Developer. I am a student of UIN Syarif Hidayatullah majoring in Informatics Engineering. I love to learn Web Development especially Front-End Web Development. I'm quite mastering in HTML, CSS, Javascript, Bootstrap, React, NextJS, and several other technologies. Aside of my hard skills, I'd love to develop my soft skills by being involved in several organizations. With my organization background, I've learned Time Management and Communication Skills to cooperate with any team.</p>
      <div className="flex my-5 items-center gap-3 w-3/4 mx-auto">
        <p className="text-primary text-5xl font-bold">2+</p>
        <p className="text-xl">Years of experience. Specialised in building apps, while ensuring a seamless web experience for end users.</p>
      </div>
      <Techs />
      <Educations />
      <Certificates />
    </section>
  )
}

export default about
import React from 'react'
import Image from 'next/image'

const projectCard = (props) => {
  return (
    <div className="bg-lighten rounded p-3 flex flex-col" key={props.id}>
      <img  src={props.image}/>
      <h4 className="text-primary text-xl font-semibold mt-3">{props.title}</h4>
      <p className="text-justify">{props.desc}</p>
      <div className="flex mt-auto justify-between gap-2 pt-2">
        <a className="btn-primary basis-1/2 text-center" href={props.link} target="_blank" rel="noreferrer">View Live</a>
        <a className="btn-secondary basis-1/2 text-center" href={props.repo} target="_blank" rel="noreferrer">Repository</a>
      </div>
    </div>
  )
}

export default projectCard
import React from 'react'
import ProjectCard from './projectCard'
import { projectList } from './data'

const Projects = () => {
  return (
    <section id="projects" className="container mx-auto pt-20 py-5">
      <h3 className="text-primary font-semibold text-2xl">Projects:</h3>
      <p className="text-justify tracking-wide leading-7 mt-3">I have worked on many projects over the course of being a Web Developer, here are a few of my live, real-world projects</p>
      <div className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mx-auto justify-center my-5 gap-5 w-3/4">
        {
          projectList.map((project) => {
            return(
              <ProjectCard 
                key={project.id}
                title={project.title} 
                desc={project.desc}
                image={project.image}
                link={project.link}
                repo={project.repo}
              />
            )
          })
        }
      </div>
    </section>
  )
}

export default Projects
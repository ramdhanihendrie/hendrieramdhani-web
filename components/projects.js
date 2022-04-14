import React from 'react'
import ProjectCard from './projectCard'

const projects = () => {
  const projectList = [
    {
      id: 1, 
      title: "Portfolio Website", 
      desc: "A portfolio website provides professional information about presents a showcase of my work", 
      image: "/files/portfolio-web.png",
      link: "https://hendrie-ramdhani.vercel.app/", 
      repo: "https://github.com/ramdhanihendrie/hendrieramdhani-web"
    },
    {
      id: 2, 
      title: "Organization Profile Web", 
      desc: "A website that contains the organizational profile of GDSC UIN Jakarta", 
      image: "/files/organization-profile.png",
      link: "https://gdsc-uinjkt.github.io/", 
      repo: "https://github.com/gdsc-uinjkt/gdsc-uinjkt.github.io"
    },
    {
      id: 3, 
      title: "Online Invitation", 
      desc: "An event invitation through online media in the form of a website", 
      image: "/files/online-invitation.png",
      link: "https://arya-budiartana.github.io/ProgateProject/", 
      repo: "https://github.com/Arya-BudiArtana/ProgateProject"
    },
    {
      id: 4, 
      title: "Calculator Web App", 
      desc: "Responsive website-based calculator application, so it can be accessed on all devices", 
      image: "/files/calculator-app.png",
      link: "https://ramdhanihendrie.github.io/simple-calculator-js/", 
      repo: "https://github.com/ramdhanihendrie/simple-calculator-js"
    },
    {
      id: 5, 
      title: "Company Profile", 
      desc: "Website company profile or company profile is a page that explains in detail about the company", 
      image: "/files/company-profile.png",
      link: "http://jaifoundation.or.id/", 
      repo: "http://jaifoundation.or.id/"
    },
    {
      id: 6, 
      title: "Dashboard App", 
      desc: "A dashboard app is an information management software application", 
      image: "/files/dashboard-app.png",
      link: "https://github.com/ramdhanihendrie/dashboard-app", 
      repo: "https://github.com/ramdhanihendrie/dashboard-app"
    },
  ]
  return (
    <section id="projects" className="container mx-auto pt-20 py-5">
      <h3 className="text-primary font-semibold text-2xl">Projects:</h3>
      <p className="text-justify tracking-wide leading-7 mt-3">I have worked on many projects over the course of being a Web Developer, here are a few of my live, real-world projects</p>
      <div className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mx-auto justify-center my-5 gap-5 w-3/4">
        {
          projectList.map((project) => {
            return(
              <ProjectCard 
                id={project.id}
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

export default projects
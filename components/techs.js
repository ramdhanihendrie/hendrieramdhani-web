import React from 'react'
import TechCard from './techCard'

const techs = () => {
  const techList = [
    {title: "React", icon: "akar-icons:react-fill"},
    {title: "Next.js", icon: "akar-icons:nextjs-fill"},
    {title: "Bootstrap", icon: "akar-icons:bootstrap-fill"},
    {title: "TailwindCSS", icon: "bxl:tailwind-css"},
    {title: "SASS", icon: "akar-icons:sass-fill"},
    {title: "Redux", icon: "akar-icons:redux-fill"},
    {title: "jQuery", icon: "akar-icons:jquery-fill"},
    {title: "WordPress", icon: "bi:wordpress"},
    {title: "JavaScript", icon: "akar-icons:javascript-fill"},
    {title: "HTML", icon: "akar-icons:html-fill"},
    {title: "CSS", icon: "akar-icons:css-fill"},
    {title: "Git", icon: "bi:git"},
  ]
  return (
    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 overflow-hidden gap-5 w-3/4 mx-auto my-5">
      {
        techList.map((tech) => {
          return (
            <TechCard key={tech.title} title={tech.title} icon={tech.icon} />
          )
        })
      }
    </div>
  )
}

export default techs
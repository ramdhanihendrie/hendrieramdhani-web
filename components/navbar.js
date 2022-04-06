import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faBars } from '@fortawesome/free-solid-svg-icons'

const navbar = () => {
  const [menuOpen, setMenuOpen] = React.useState(false);
  const navs = ["home", "about", "projects", "contact"]
  return (
    <>
      <div className="flex flex-wrap">
        <div className="w-full">
          <nav className="relative flex flex-wrap items-center justify-between py-2 pl-3 md:pl-0  bg-darken">
            <div className="container mx-auto flex flex-wrap items-center justify-between">
              <div className="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a
                  className="text-xl md:text-3xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap text-primary"
                  href="#"
                >
                  Hendrie Ramdhani
                </a>
                <button
                  className="text-white cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                  type="button"
                  onClick={() => setMenuOpen(!menuOpen)}
                >
                  <FontAwesomeIcon icon={faBars} />
                </button>
              </div>
              <div
                className={
                  "lg:flex flex-grow items-center" +
                  (menuOpen ? " flex" : " hidden")
                }
                id="example-navbar-info"
              >
                <ul className="flex flex-col lg:flex-row list-none lg:ml-auto">
                  {
                    navs.map((nav) => {
                      return (
                        <li className="nav-item" key={nav}>
                          <a
                            className="px-3 py-2 flex items-center text-lg font-semibold leading-snug text-white hover:opacity-75 capitalize"
                            href={"#" + (nav == "home" ? "" : nav)}
                          >
                            {nav}
                          </a>
                        </li>
                      )
                    })
                  }
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </>
  )
}

export default navbar
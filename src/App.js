import { useEffect, useState } from 'react'
import './App.css'
import Person from './components/Person'
import data from './data'

function App() {
  useEffect(() => {
    document.title = 'Birthday Reminder App'
  })
  const [people, setPeople] = useState(data)
  const handleButtonClick = (e) => {
    e.preventDefault()
    setPeople([])
  }
  return (
    <div className="App">
      <div className="card">
        <h2 className="header">You have {people.length} birthdays today</h2>
        <div>
          {people.map((item, index) => (
            <div key={index}>
              <Person name={item.name} age={item.age} picture={item.image} />
            </div>
          ))}
        </div>
        <button data-testid="clear" className="button">
          <p className="buttonText" onClick={(e) => handleButtonClick(e)}>
            Clear All
          </p>
        </button>
      </div>
    </div>
  )
}

export default App

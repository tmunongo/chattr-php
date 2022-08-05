import React from 'react'

const Person = ({ name, picture, age }) => {
  return (
    <div className="person">
      <img className="profile-pic" src={picture} alt="profile" />
      <div className="info">
        <p className="name">{name}</p>
        <p className="age">{age} years</p>
      </div>
    </div>
  )
}

export default Person

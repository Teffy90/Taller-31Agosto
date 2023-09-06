import { StyleSheet, TextInput, View, Text, Button } from 'react-native'
import React from 'react'

export default function Formulario() {
  return (
    <View>
        <Text style={{fontSize: 20, fontWeight: 'bold', color: 'green'}}>{"Ingresa tu usuario:"}</Text>
      <TextInput
        placeholder='Usuario'
        style={style.input}
      />
      <Text style={{fontSize: 20, fontWeight: 'bold', color: 'green'}}>{"Contraseña:"}</Text>
      
      <TextInput
        style={style.input}
        placeholder="Contraseña"
        keyboardType="numeric"
      />
      <Button title="Iniciar sesion" color="red" accessibilityLabel="Inicio de sesion"/>

    </View>
  )
}


const style = StyleSheet.create({
    input: {
      height: 40,
      margin: 12,
      borderWidth: 1,
      padding: 10,
    },
  });
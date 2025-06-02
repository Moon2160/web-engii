import React from "react";
import { Container, Form, Button } from "react-bootstrap";

export default function AdminLogin() {
  return (
    <Container className="mt-5">
      <h2 className="text-center fw-bold text-danger">Admin Login</h2>
      <Form className="p-4 shadow-lg rounded bg-light">
        <Form.Group className="mb-3">
          <Form.Label>Email</Form.Label>
          <Form.Control type="email" placeholder="Enter your email" />
        </Form.Group>

        <Form.Group className="mb-3">
          <Form.Label>Password</Form.Label>
          <Form.Control type="password" placeholder="Enter your password" />
        </Form.Group>

        <Button variant="danger" className="w-100">Login</Button>
      </Form>
    </Container>
  );
}